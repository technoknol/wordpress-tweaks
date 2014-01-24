<?php 

/***  ADD THE FOLLOWING CODE INTO FUNCTIONS.PHP   ***/

// add a link to the WP Toolbar
function custom_toolbar_link($wp_admin_bar) {
	$args = array(
		'id' => 'wpbeginner',
		'title' => 'Search WPBeginner', 
		'href' => 'https://www.google.com:443/cse/publicurl?cx=014650714884974928014:oga60h37xim', 
		'meta' => array(
			'class' => 'wpbeginner', 
			'title' => 'Search WPBeginner Tutorials'
			)
	);
	$wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'custom_toolbar_link', 999);


/*****************************************************************************/

/*
* add a group of links under a parent link
*/

// Add a parent shortcut link

function custom_toolbar_link($wp_admin_bar) {
	$args = array(
		'id' => 'wpbeginner',
		'title' => 'WPBeginner', 
		'href' => 'https://www.wpbeginner.com', 
		'meta' => array(
			'class' => 'wpbeginner', 
			'title' => 'Visit WPBeginner'
			)
	);
	$wp_admin_bar->add_node($args);

// Add the first child link 
	
	$args = array(
		'id' => 'wpbeginner-guides',
		'title' => 'WPBeginner Guides', 
		'href' => 'http://www.wpbeginner.com/category/beginners-guide/',
		'parent' => 'wpbeginner', 
		'meta' => array(
			'class' => 'wpbeginner-guides', 
			'title' => 'Visit WordPress Beginner Guides'
			)
	);
	$wp_admin_bar->add_node($args);

// Add another child link
$args = array(
		'id' => 'wpbeginner-tutorials',
		'title' => 'WPBeginner Tutorials', 
		'href' => 'http://www.wpbeginner.com/category/wp-tutorials/',
		'parent' => 'wpbeginner', 
		'meta' => array(
			'class' => 'wpbeginner-tutorials', 
			'title' => 'Visit WPBeginner Tutorials'
			)
	);
	$wp_admin_bar->add_node($args);

// Add a child link to the child link

$args = array(
		'id' => 'wpbeginner-themes',
		'title' => 'WPBeginner Themes', 
		'href' => 'http://www.wpbeginner.com/category/wp-themes/',
		'parent' => 'wpbeginner-tutorials', 
		'meta' => array(
			'class' => 'wpbeginner-themes', 
			'title' => 'Visit WordPress Themes Tutorials on WPBeginner'
			)
	);
	$wp_admin_bar->add_node($args);

}

add_action('admin_bar_menu', 'custom_toolbar_link', 999);

?>

SOURCE : http://www.wpbeginner.com/wp-tutorials/how-to-add-custom-shortcut-links-to-wordpress-toolbar/
