<footer>
     <div id="navbar" class="navbar-collapse collapse navbar-fixed-bottom">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'nav navbar-nav'));
            ?>
     </div>
 </footer>
</div> <!-- /container content-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
