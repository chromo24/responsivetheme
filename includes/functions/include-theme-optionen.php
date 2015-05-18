<?php

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
        'name' => 'Meine Sidebar',
        'description' => 'Eine Beschreibung',
        'before_widget' => '<ul class="nav nav-sidebar"><li>',
        'after_widget' => '</li></ul> ',
        'before_title' => ' <h2>',
        'after_title' => '</h2> ' ));

        register_sidebar(array(
        'name' => 'Footer',
        'description' => 'Eine Footer Beschreibung',
        'before_widget' => ' <div class ="footer">',
        'after_widget' => '</div>',
        'before_title' => ' <h4>',
        'after_title' => '</h4>' ));
    }

    add_theme_support( 'menus' );

    function meine_menus() {
        register_nav_menus(
            array(
                'haupt-menu' =>__('Haupt Menu'),
                'footer-menu' =>__('Footer Menu'),
                'extra-menu' =>__('Extra Menu')
            )
        );
    }
    add_action('init', 'meine_menus');
    add_theme_support('post-thumbnails');

    /*add_filter( 'wp_nav_menu_items', 'ls_add_home_link', 10, 2 );

    function ls_add_home_link( $items, $args ) {

        if ( $args->theme_location == 'haupt-menu') {

            if ( is_front_page() )
                $class = 'class="current_page_item"';
            else
                $class = '';

            $homeMenuItem =
                    '<li ' . $class . '>' .
                    $args->before .
                    '<a href="' . home_url( '/' ) . '" title="Home">' .
                    $args->link_before . 'Home' . $args->link_after .
                    '</a>' .
                    $args->after .
                    '</li>';

            $items = $homeMenuItem . $items;

        }

        return $items;
    }
*/
?>
