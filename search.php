<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <?php the_date(); ?>
            <?php the_author(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
            <p>Keine Ergebnisse gefunden!</p>
    <?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>