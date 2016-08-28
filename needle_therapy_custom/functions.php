<?php 

###### Function to load additional scripts ######
function needleTherapy_scripts() {
	// Deregister jquery to load in footer
	wp_deregister_script( 'jquery' );
    // Register and load jquery in footer
    wp_register_script( 'jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, NULL, true );
    // Font Awesome, required for star rating functions
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/322889a4a3.js');	// Enqueue bootstrap javascript
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
	// Enqueue custom js:
	wp_enqueue_script( 'needletherapy-js',  get_template_directory_uri() . '/js/needletherapy.js', array( 'jquery' ), '1.0.3', true );
	if ( is_front_page() ) {	
		// Enqueue custom js:
		wp_enqueue_script( 'frontpage-needletherapy-js',  get_template_directory_uri() . '/js/frontpage-needletherapy.js', array( 'jquery' ), '1.0.3', true );
    }

	// Load main stylesheet:
	wp_enqueue_style( 'needletherapy-style', get_stylesheet_uri() );
	// Load google fonts stylesheet.
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Caveat|Lora|Quattrocento:400,700' );
	
}
add_action( 'wp_enqueue_scripts', 'needleTherapy_scripts' );



####### Theme set-up function #############
if ( ! function_exists( 'needleTherapy_setup' ) ) :
/**
 * Sets up theme defaults.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function needleTherapy_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );


	// Nav menus are 'hard coded in header.php using bootstrap .nav class
	// register_nav_menu('primary', 'Primary'); 
}
endif; 
add_action( 'after_setup_theme', 'needleTherapy_setup' );



/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */
require_once('inc/wp_bootstrap_navwalker.php');
require_once('inc/bootstrap-custom-menu-widget.php');


/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */

register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
    )
);


// remove inline width and height attributes for thumbnail images
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );


// Adjust except length
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>