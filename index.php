    <?php get_header(); ?>
   <?php
    if ( have_posts() ) :
      while ( have_posts() ) :  the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_time(d.m.Y); ?>
        <?php the_content('Weiterlesen'); ?>
        <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', 'Kommentare geschlossen');
      endwhile;
   endif;
   ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>