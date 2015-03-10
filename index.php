    <?php get_header(); ?>
   <div class="container">
   <?php
    if ( have_posts() ) :
      while ( have_posts() ) :  the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_time(d.m.Y); ?>
        <?php the_content('Weiterlesen'); ?>
        <?php the_author_posts(); ?>
        <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', 'Kommentare geschlossen');
      endwhile;
   endif;
   ?>
   </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>