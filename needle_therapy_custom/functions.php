<?php 

###### Function to load additional scripts ######
function needleTherapy_scripts() {
	// Deregister jquery to load in footer
	wp_deregister_script( 'jquery' );
    // Register and load jquery in footer
    wp_register_script( 'jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, NULL, true );
	// Enqueue custom js:
	wp_enqueue_script( 'needletherapy-js',  get_template_directory_uri() . '/js/needletherapy.js', array( 'jquery' ), '1.0.3', true );

	wp_enqueue_script( 'nt-dropotron-js',  get_template_directory_uri() . '/js/jquery.dropotron.min.js', array( 'jquery' ), '1.0.3', true );

	wp_enqueue_script( 'nt-scrolly-js',  get_template_directory_uri() . '/js/jquery.scrolly.min.js', array( 'jquery' ), '1.0.3', true );
	wp_enqueue_script( 'nt-scrollgress-js',  get_template_directory_uri() . '/js/jquery.scrollgress.min.js', array( 'jquery' ), '1.0.3', true );
	wp_enqueue_script( 'nt-skel-js',  get_template_directory_uri() . '/js/skel.min.js', array( 'jquery' ), '1.0.3', true );
	wp_enqueue_script( 'nt-util-js',  get_template_directory_uri() . '/js/util.js', array( 'jquery' ), '1.0.3', true );
	// if lte IE8
	// wp_enqueue_script( 'nt-respond-js',  get_template_directory_uri() . '/js/respond.min.js', array( 'jquery' ), '1.0.3', true );
	wp_enqueue_script( 'nt-main-js',  get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.3', true );
	// Load main stylesheet:
	wp_enqueue_style( 'needletherapy-style', get_stylesheet_uri() );
	// Load google fonts stylesheet.
	wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css?family=Lato:300,400,900" );
	
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

function nt_custom_title() {

	if ( is_home() && ! is_front_page() ) { 
        return single_post_title('', FALSE);
    } elseif ( is_category() or is_tax() ) {
        return single_cat_title('', FALSE);
    } elseif ( is_post_type_archive() ) {
      return post_type_archive_title('', FALSE);
    } elseif ( is_archive() ) {
       return __( 'Archive ', 'needletherapy' ). '<small>' . esc_html( get_the_archive_title() ) . '</small>' ;
    } elseif ( is_search() ) {
        return  __( 'Search Results for: ', 'needletherapy' ). '<small>' . esc_html( get_search_query() ) . '</small>' ;
    } 
    elseif ( is_404() ) {
    	return "Err... something's not right here";
    }else {
        return get_the_title(); 
    } 
}

function nt_register_nav_menus() {
	register_nav_menus( 
	    array(
	        'main_menu' => 'Main Menu',
	    )
	);
}
add_action( 'after_setup_theme', 'nt_register_nav_menus' );


?>