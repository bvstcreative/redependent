<?php

if ( ! function_exists( 'bvunction' ) ) :

	function bvunction() {
		
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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );



		add_filter('acf/settings/remove_wp_meta_box', '__return_false');

		

	}

	add_action( 'after_setup_theme', 'bvunction' );

endif;

add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'post-thumbnails' );

function wpb_custom_new_menu() {register_nav_menu('bvst-menu',__( 'BVST Menu' ));}
add_action( 'init', 'wpb_custom_new_menu' );