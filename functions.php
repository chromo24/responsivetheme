<?php
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Meine Sidebar',
	'description' => 'Eine Beschreibung',
	'before_widget' => '<div class ="col-md-4">',
	'after_widget' => '</div> ',
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
?>
