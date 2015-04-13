<?php get_header(); ?>
<h2><?php the_author(); ?></h2>
<?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_date(); ?>
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php the_content ('Weiterlesen'); ?>
        <?php endwhile;
    endif;
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>