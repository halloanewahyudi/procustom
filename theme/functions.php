<?php
/**
 * procustom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package procustom
 */

if ( ! defined( 'PROCUSTOM_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'PROCUSTOM_VERSION', '0.1.0' );
}

if ( ! defined( 'PROCUSTOM_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `procustom_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'PROCUSTOM_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'procustom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function procustom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on procustom, use a find and replace
		 * to change 'procustom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'procustom', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );


		/* custom logo */
		add_theme_support('custom-logo');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'procustom' ),
				'menu-2' => __( 'Footer Menu', 'procustom' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'procustom_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function procustom_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'procustom' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'procustom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'procustom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function procustom_scripts() {
	wp_enqueue_style( 'procustom-style', get_stylesheet_uri(), array(), PROCUSTOM_VERSION );

  // Enqueue Swiper CSS
wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), null);

// Enqueue Swiper JS
wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true);

	wp_enqueue_script( 'procustom-script', get_template_directory_uri() . '/js/script.min.js', array(), PROCUSTOM_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'procustom_scripts' );

/**
 * Enqueue the block editor script.
 */
function procustom_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'procustom-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			PROCUSTOM_VERSION,
			true
		);
		wp_add_inline_script( 'procustom-editor', "tailwindTypographyClasses = '" . esc_attr( PROCUSTOM_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'procustom_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function procustom_tinymce_add_class( $settings ) {
	$settings['body_class'] = PROCUSTOM_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'procustom_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


// enable svg
function enable_svg_support($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'enable_svg_support');

// enable webp
function enable_webp_support($mimes) {
	$mimes['webp'] = 'image/webp';
	return $mimes;
}

// Nonaktifkan editor Gutenberg/Klasik untuk halaman depan (home)
// Nonaktifkan Gutenberg untuk halaman depan
function disable_gutenberg_for_home($can_edit, $post) {
    // Periksa apakah ini adalah halaman depan
    if ($post && $post->ID == get_option('page_on_front')) {
        return false; // Nonaktifkan Gutenberg
    }
    return $can_edit;
}
add_filter('use_block_editor_for_post', 'disable_gutenberg_for_home', 10, 2);

// Nonaktifkan Editor Klasik juga
function remove_classic_editor_for_home() {
    $home_id = get_option('page_on_front');
    $screen = get_current_screen();

    // Periksa apakah ini halaman depan
    if ($screen->post_type === 'page' && isset($_GET['post']) && $_GET['post'] == $home_id) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_head', 'remove_classic_editor_for_home');



// tolong buatlkan paginasi ada arrow nya juga

function pagination($pages = '', $range = 2){  
  $showitems = ($range * 2)+1; 

  global $paged;
  if(empty($paged)) $paged = 1;

  if($pages == ''){
	global $wp_query;
	$pages = $wp_query->max_num_pages;
	if(!$pages){
	  $pages = 1;
	}
  } 

  if(1 != $pages){
		echo "<ul class='pagination flex justify-center items-center gap-4'>";
		echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<li class='page-item active rounded-full bg-primary text-white w-6 h-6 flex justify-center items-center'><span class='page-link'>".$i."</span></li>":"<li class='page-item'><a class='page-link ' href='".get_pagenum_link($i)."'>".$i."</a></li>";
			}
		}	
		echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
		echo "</ul>";
	  }		
  }

