</div> <!-- /container content-->
<footer>
        <nav class="navbar navbar-inverse" role="navigation">
             <div id="navbar-footer" class="navbar-collapse collapse navbar-center">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'nav navbar-nav'));
                    ?>
             </div>
        </nav>
 </footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
