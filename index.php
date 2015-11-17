<?php get_header(); ?>

<header></header>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry">
<?php if (has_post_thumbnail()) {
  the_post_thumbnail(); 
}?>
            <?php the_content(); ?>

            </div>
            <?php endwhile;  ?>
            <?php endif; ?>
        </div>
    </div>

</div>

<?php get_footer();?>