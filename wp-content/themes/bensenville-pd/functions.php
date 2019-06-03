<?php

require get_template_directory().'/include/themesetup.php'; //Theme setup and widgets , custom option pages 
require get_template_directory().'/include/enqueue_scripts.php'; //Enqueue Scripts and style
require get_template_directory().'/include/general_function.php'; //General Function For Theme
require get_template_directory().'/include/custom_image_size.php'; //Custom Image Size




/**
 * Enqueue scripts and styles.
 */
function demo_scripts() {
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'demo_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

add_action( 'after_setup_theme', 'bensenville_pd_setup' );
add_action( 'after_setup_theme', 'bensenville_pd_content_width', 0 );
add_action( 'widgets_init', 'bensenville_pd_widgets_init' );
add_action( 'wp_enqueue_scripts', 'bensenville_pd_scripts' );

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

add_filter('login_errors', 'inn_wrong_login');
add_filter('the_generator', 'wpt_remove_version');
add_action('admin_init', 'bensenville_disable_comments_post_types_support');
add_filter('comments_open', 'bensenville_disable_comments_status', 20, 2);
add_filter('pings_open', 'bensenville_disable_comments_status', 20, 2);
add_filter('comments_array', 'bensenville_disable_comments_hide_existing_comments', 10, 2);
add_action('admin_menu', 'bensenville_disable_comments_admin_menu');
add_action('admin_init', 'bensenville_disable_comments_admin_menu_redirect');
add_action('admin_init', 'bensenville_disable_comments_dashboard');
add_action('init', 'bensenville_disable_comments_admin_bar');

add_filter('acf/fields/page_link/query', 'remove_draft_archive_link', 10, 3);
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');