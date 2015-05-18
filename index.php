  <?php get_header(); ?>
  <div align="center" class="row">
    <h1>delima blog</h1>
</div>
<div class="row">
    <div class="col-md-9 main">
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
    </div>
    <div class="col-md-3 sidebar">
          <?php get_sidebar(); ?>
    </div>
</div>
    <?php get_footer(); ?>