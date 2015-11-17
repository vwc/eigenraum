<?php get_header(); ?>

<header>
    <div class="container immo">
        <div class="headerpic"></div>
    </div>
</header>

<div class="container immo">
    <h1>Immobilien</h1>
    <?php query_posts('category_name=Immobilien'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row post">

        <div class="col-xs-12 col-sm-4 col-md-4 thumb">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail(); 
                }?>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8">
            <p class="date"><?php the_time('F, Y'); ?></p>
            <a href=" <?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
            <div class="entry">

            <?php the_content(); ?>

            </div>  

        </div>
    </div>
            <?php endwhile;  ?>
            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
            <?php endif; ?>
                <a class="btn btn-default" href="javascript:history.back();" role="button">Zurück</a>
</div>

<?php get_footer();?>