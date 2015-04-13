   <?php get_header(); ?>
   <h2><?php single_cat_title(); ?></h2>
   <?php if (category_description()) : ?>
        <p><?php echo category_description(); ?></p>
   <?php endif; ?>
   <?php
    if ( have_posts() ) :
      while ( have_posts() ) :  the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_post_thumbnail('thumbnail'); ?>
        <?php the_content('Weiterlesen'); ?>
        <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', 'Kommentare geschlossen');
      endwhile;
   endif;
   ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>