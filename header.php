<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body {
                padding-top: 0px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href ="<?php echo get_stylesheet_directory_uri(); ?>/style.css" >

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>
    <body>
  <!--  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->
    <nav class="navbar navbar-inverse" role="navigation">
      <!--<?php
      // Fix menu overlap bug..
      //  if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>';
      ?>-->
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <?php wp_nav_menu(array(
            'theme_location' => 'haupt-menu',
            'menu_class' => 'nav navbar-nav'));
           ?>
         <!-- <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>-->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container content">
