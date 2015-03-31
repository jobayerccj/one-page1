<?php
/**
 * onepage1 functions and definitions
 *
 * @package onepage1
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'onepage1_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function onepage1_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on onepage1, use a find and replace
	 * to change 'onepage1' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'onepage1', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'onepage1' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'onepage1_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // onepage1_setup
add_action( 'after_setup_theme', 'onepage1_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function onepage1_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'onepage1' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'onepage1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function onepage1_scripts() {
	wp_enqueue_style( 'onepage1-style', get_stylesheet_uri() );

	wp_enqueue_script( 'onepage1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'onepage1-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '2013011512', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
        
        
        wp_enqueue_style('gf', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900');
        wp_enqueue_style('bs', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');       
        wp_enqueue_style('fa', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
             
        wp_enqueue_style( 'animate.css', get_template_directory_uri().'/css/animate.css',null,'1.0');
        wp_enqueue_style( 'linecons.css', get_template_directory_uri().'/css/linecons.css',null,'1.0');
        wp_enqueue_style( 'strip.css', get_template_directory_uri().'/inc/strip/css/strip.css',null,'1.0');
        wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri().'/css/owl.carousel.css',null,'1.0');
        wp_enqueue_style( 'style.css', get_template_directory_uri().'/css/style.css',null,'1.0');
        wp_enqueue_style( 'responsive.css', get_template_directory_uri().'/css/responsive.css',null,'1.0');
        
        wp_enqueue_script('bs-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array("jquery"), '20130115', true); 
        wp_enqueue_script('jquery', '//code.jquery.com/jquery.min.js', array(), '20130116', true); 
        wp_enqueue_script('waypoints.js', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), '20130117', true); 
        
        wp_enqueue_script('counter-up.js', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '20130118', true); 
        wp_enqueue_script('sticky.js', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20130119', true); 
        wp_enqueue_script('strip.pkgd.min.js', get_template_directory_uri() .'/inc/strip/js/strip.pkgd.min.js', array(), '20130120', true); 
        wp_enqueue_script('jquery.easing.1.3.min.js', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array(), '20130121', true); 
        wp_enqueue_script('jquery.tweet.min.js', get_template_directory_uri() . '/js/jquery.tweet.min.js', array(), '20130122', true); 
        wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri() .'/js/owl.carousel.min.js', array(), '20130123', true); 
        wp_enqueue_script('isotope.pkgd.min.js', get_template_directory_uri() . 'js/isotope.pkgd.min.js', array(), '20130124', true);                
        wp_enqueue_script('wow.min.js',get_template_directory_uri() .  '/js/wow.min.js', array(), '20130125', true); 
        
        wp_enqueue_script('main.js',get_template_directory_uri() .  '/js/main.js', array(), '20130126', true); 
        
}
add_action( 'wp_enqueue_scripts', 'onepage1_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/cpt-sections.php';
require get_template_directory() . '/inc/mb/mb-section-type.php';



if (!class_exists("CMB2")) {
    require get_template_directory() . '/libs/cmb2/init.php';
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
