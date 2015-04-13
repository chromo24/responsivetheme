<?php get_header(); ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="entry-thumbnail">
	   <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <h3 class="entry-title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>