<?php
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
}

add_theme_support( 'post-thumbnails' );
	
set_post_thumbnail_size( 250, 155, true );
function schloss_widgets_init() {
    register_sidebar(array(
    'name'          => 'Erstes Widget',
    'id'            => 'erstes_widget',
    'description'   => 'Meine erste selbst angelegte Widget Area',
    'before_widget' => '<div class="wigetto">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'schloss_widgets_init');

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

function slider_photo_post_types() {
	$labels = array(
		'name' => 'Slider Fotos',
		'singular_name' => 'Slider Foto',
		'add_new' => 'Hinzufügen',
		'add_new_item' => 'Neues Foto hinzufügen',
		'edit_item' => 'Foto bearbeiten',
		'new_item' => 'Neues Foto',
		'view_item' => 'Foto anzeigen',
		'search_items' => 'Foto suchen',
		'not_found' => 'Kein Foto gegfunden',
		'not_found_in_trash' => 'Kein Foto im Papierkorb gefunden',
		'parent_item_colon' => '',
		'menu_name' => 'Slider Fotos'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'page',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 21,
		'supports' => array('title')
	);
	register_post_type('slider_photos', $args);
}
add_action('init', 'slider_photo_post_types');

function display_bootstrap_slider() {
	$args = array(
		'post_type' => 'slider_photos'
	);

	$loop = new WP_Query($args);
	$images = array();

	while ($loop->have_posts()) {
		$loop->the_post();

		$images[] = array(
			'title' => get_the_title(),
			'image' => wp_get_attachment_image_src(get_field('foto', get_the_ID(), false), array(1170, 320))
		);
	}

	if (count($images) > 0) {
		ob_start();
		?>
		<div id="bootstrap-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			<?php foreach ($images as $key => $image) : ?>
				<div class="item <?php echo $key == 0 ? 'active' : ''; ?>">
					<img src="<?= $image['image'][0]; ?>" alt="<?= $image['title']; ?>">

				</div>
			<?php endforeach; ?>
			</div>

		</div>
<?php
	}
	
	$output = ob_get_contents();
	ob_end_clean();
	wp_reset_postdata();
	
	return $output;
}

function my_mce_before_init_insert_formats( $init_array ) {

    $style_formats = array(
        array(
            'title' => 'Special',
            'block' => 'span',
            'classes' => 'special',
            'wrapper' => false,
        ),
    );
    $init_array['style_formats'] = json_encode( $style_formats);
    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
?>