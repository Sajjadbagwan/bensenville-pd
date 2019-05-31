<?php 

/**
 * Enqueue scripts and styles.
 */
function bensenville_pd_scripts() {
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	
    wp_enqueue_style( 'bensenville-pd-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
	
	wp_enqueue_script( 'bensenville-pd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'bensenville-pd-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'custome', get_template_directory_uri() . '/js/custome.js', array(), '20151215', true );
	
	wp_enqueue_script( 'googletranslatore', get_template_directory_uri() . '/js/googletranslatore.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
