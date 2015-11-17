<?php get_header(); ?>

<header>
    <div class="container kurse">
        <div class="headerpic"></div>
    </div>
</header>

<div class="container kurse">
    <h1>Kurse</h1>
    <?php query_posts('category_name=Kurse'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row post">

        <div class="col-xs-12 col-sm-4 col-md-4 thumb">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail(); 
                }?>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <p class="date"><?php the_time('F, Y'); ?></p>
            <h2 class="entry-title"><?php the_title(); ?></h2>

            <div class="entry">

            <?php the_content(); ?>

            </div>        
        </div>
    </div>
            <?php endwhile;  ?>
            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
            <?php endif; ?>
</div>

<?php get_footer();?>