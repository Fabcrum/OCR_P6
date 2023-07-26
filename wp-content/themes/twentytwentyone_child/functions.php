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


/* VERSION AJOUT > RETIRER LE LIEN ADMIN DANS LE MENU ET LES CLASS DANS HEADER.CSS */

function affiche_lien_admin( $items, $args ) { 
	if (is_user_logged_in()) { 
		return	'<li class="lien_nousrencontrer"><a href="./nous-rencontrer">Nous rencontrer</a></li>
				<li class="lien_admin"><a href="../wp-admin">Admin</a></li>
				<li class="lien_commander"><a href="./commander">commander</a></li>';
    }
	else
	return $items;
}
add_filter( 'wp_nav_menu_items', 'affiche_lien_admin', 10, 2 ); 
