   <?php get_header(); ?>
   <div class="container">
   <h2><?php single_tag_title(); ?></h2>
   <?php if (tag_description()) : ?>
        <p><?php echo tag_description(); ?></p>
   <?php endif; ?>
   <?php
    if ( have_posts() ) :
      while ( have_posts() ) :  the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <div class="metabox">
            <?php the_date(); ?>
            <?php the_author(); ?>
        </div>
        <?php the_post_thumbnail('thumbnail'); ?>
        <?php the_content('Weiterlesen'); ?>
        <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', 'Kommentare geschlossen');
      endwhile;
   endif;
   ?>
   </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>