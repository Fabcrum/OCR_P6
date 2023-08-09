<?php
/**
 * Twenty Twenty-Three Child functions and definitions
 */

/* Chargement des différents fichiers du thème */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('twenty-twenty-three-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
	wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/css/header.css', array(), filemtime(get_stylesheet_directory() . '/css/header.css'));
	wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), filemtime(get_stylesheet_directory() . '/css/footer.css'));
	wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/css/home.css', array(), filemtime(get_stylesheet_directory() . '/css/home.css'));
	wp_enqueue_style('nousrencontrer-style', get_stylesheet_directory_uri() . '/css/nousrencontrer.css', array(), filemtime(get_stylesheet_directory() . '/css/nousrencontrer.css'));
	wp_enqueue_style('forms-style', get_stylesheet_directory_uri() . '/css/forms.css', array(), filemtime(get_stylesheet_directory() . '/css/forms.css'));
}

/* Ajout de la fonctionnalité menu */
function register_my_menus() {
	register_nav_menus(
		array( 'header-menu-ajout' => __( 'Header Menu Ajout' ),	   )
	 );
}
add_action( 'init', 'register_my_menus' );

/*
function afficheAdmin() {
	apply_filters( 'wp_nav_menu_items', ('Nous rencontrer', 'Admin', 'Commander'), if (is_user_logged_in => 'true' ));
	else return ( 'wp_nav_menu_items', ('Nous rencontrer', 'Commander'));
}
add_filter( 'wp_nav_menu_items' );
*/



/* SELON TUTO EN LIGNE 
add_action('add_theme_support', 'twentytwentythree_child_supports');
function twentytwentythree_child_supports()
{ 
	add_theme_support('menus');
	register_nav_menus('header', 'En tête du menu');
}
*/
