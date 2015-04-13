<?php get_header(); ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="entry-thumbnail">
	   <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <div class="entry-author">
            Von: <?php echo the_author_posts_link(); ?>
        </div>
        <!--<h3 class="entry-title"><?php the_title(); ?></h3>-->
        <?php the_title('<h3 class="entry-title">', '</h3>'); ?>
        <?php the_content(); ?>
        <?php the_tags(); ?>
        <?php comments_template(); ?>
    <?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
