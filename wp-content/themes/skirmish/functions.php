<?php
/**
 * skirmish functions and definitions
 *
 * @package Skirmish
 * @since Skirmish 1.8
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since skirmish 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 540; /* pixels */

if ( ! function_exists( 'skirmish_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since skirmish 1.0
 */
function skirmish_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );


	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on skirmish, use a find and replace
	 * to change 'skirmish' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'skirmish', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'skirmish' ),
	) );

	/**
	 * Add support for the Aside and Gallery Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
	
	add_editor_style() ;

	// Enable post thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 50, 50, true );
	add_image_size( 'index-post-thumbnail', 125, 125, true );
	add_image_size( 'single-post-thumbnail', 745, 300, true );
	
	
}
endif; // skirmish_setup
add_action( 'after_setup_theme', 'skirmish_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since skirmish 1.0
 */
function skirmish_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'skirmish' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'skirmish_widgets_init' );


/**
 * if lt IE 9
 */
function skirmish_head(){
?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
}
add_action( 'wp_head', 'skirmish_head');

/**
 * Enqueue scripts and styles
 */
function skirmish_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', 'jquery', '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Lusitana|Droid+Sans' );

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'skirmish_scripts' );

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );
