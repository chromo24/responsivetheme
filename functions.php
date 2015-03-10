<?php
if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Meine Sidebar',
	'description' => 'Eine Beschreibung',
	'before_widget' => '<div class ="col-md-3">',
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
?>
