<?php
/**
 * Twenty Twenty-One Child functions and definitions
 */

/* Chargement des différents fichiers du thème */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
	wp_enqueue_style('twenty-twenty-one-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
	wp_enqueue_style('header-style', get_stylesheet_directory_uri() . '/css/header.css', array(), filemtime(get_stylesheet_directory() . '/css/header.css'));
	wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), filemtime(get_stylesheet_directory() . '/css/footer.css'));
	wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/css/home.css', array(), filemtime(get_stylesheet_directory() . '/css/home.css'));
	wp_enqueue_style('nousrencontrer-style', get_stylesheet_directory_uri() . '/css/nousrencontrer.css', array(), filemtime(get_stylesheet_directory() . '/css/nousrencontrer.css'));
	wp_enqueue_style('commander-style', get_stylesheet_directory_uri() . '/css/commander.css', array(), filemtime(get_stylesheet_directory() . '/css/commander.css'));
	wp_enqueue_style('forms-style', get_stylesheet_directory_uri() . '/css/forms.css', array(), filemtime(get_stylesheet_directory() . '/css/forms.css'));
}

/* RETRAIT DU LIEN ADMIN PAR CHANGEMENT DE CLASSE */
function change_lien_classe( $classes, $item ) {
	if ( !is_user_logged_in() && $item->title == 'Admin' ) {
	   $classes[] = 'no_lien_admin';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'change_lien_classe', 10, 2 );
?>

