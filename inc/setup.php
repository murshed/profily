<?php
/*
 * Disallow direct access
 */
if( !defined( 'ABSPATH' ) ) {
    die( 'Forbidden.' );
}


if ( ! function_exists( 'profily_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since profily 1.0
	 *
	 * @return void
	 */
	function profily_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

        // Custom styling
		add_editor_style( 'assets/css/styles.css' );

	}

endif;

add_action( 'after_setup_theme', 'profily_support' );

if ( ! function_exists( 'profily_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since profily 1.0
	 *
	 * @return void
	 */
	function profily_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'profily-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'profily-style' );


		wp_enqueue_style( 'profily-custom-styles', get_template_directory_uri() . '/assets/css/styles.css', __FILE__ );
        
		wp_enqueue_style( 'profily-default-block-styles', get_template_directory_uri() . '/assets/css/blocks.css', __FILE__ );

		wp_enqueue_script( 'profily-custom', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), 1.1, true);

	}

endif;

add_action( 'wp_enqueue_scripts', 'profily_styles' );



/**
 * Register block categories
 */

register_block_pattern_category(
    'profily-patterns',
    [ 
        'label' => __( 'Profily Patterns', 'profily' )
    ]
);
register_block_pattern_category(
    'profily-pages',
    [ 
        'label' => __( 'Profily Pages', 'profily' )
    ]
);



// Add block patterns
require get_template_directory() . '/inc/profily-block-patterns.php';



/**
 * Register block categories
 */
if( !function_exists( 'profily_register' ) ) :
    function profily_register() {

        /**
         * Register block styles
         */
        if( function_exists( 'register_block_style' ) ) {
            
            register_block_style(
                'core/post-terms',
                [
                    'name'         => 'dots',
                    'label'        => __( 'Dot Seperators', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/post-terms',
                [
                    'name'         => 'boxes',
                    'label'        => __( 'Boxes', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/list',
                [
                    'name'         => 'checklist',
                    'label'        => __( 'Checklist', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/post-author',
                [
                    'name'         => 'large',
                    'label'        => __( 'Large', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/post-navigation-link',
                [
                    'name'         => 'button',
                    'label'        => __( 'Button', 'profily' ),
                    'is_default'   => false,
                ]
            );
            register_block_style(
                'core/cover',
                [
                    'name'         => 'hover',
                    'label'        => __( 'Hover', 'profily' ),
                    'is_default'   => false,
                ]
            );
            register_block_style(
                'core/button',
                [
                    'name'         => 'hover',
                    'label'        => __( 'Hover', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/navigation',
                [
                    'name'         => 'standard',
                    'label'        => __( 'Standard', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/query-pagination-previous',
                [
                    'name'         => 'button',
                    'label'        => __( 'Button', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/query-pagination-next',
                [
                    'name'         => 'button',
                    'label'        => __( 'Button', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/search',
                [
                    'name'         => 'border-with-radius',
                    'label'        => __( 'Border & Radius', 'profily' ),
                    'is_default'   => false,
                ]
            );

            register_block_style(
                'core/image',
                [
                    'name'         => 'hover-zoom',
                    'label'        => __( 'Hover Zoom', 'profily' ),
                ]
            );

            register_block_style(
                'core/comment-template',
                [
                    'name'         => 'replies-bg',
                    'label'        => __( 'Replies with BG', 'profily' ),
                ]
            );
            

            register_block_style(
                'core/social-links',
                [
                    'name'         => 'logos-border',
                    'label'        => __( 'With Border', 'profily' ),
                ]
            );

            register_block_style(
                'core/social-links',
                [
                    'name'         => 'logos-only-small',
                    'label'        => __( 'Logos Only Small', 'profily' ),
                ]
            );
        }
    }
    add_action( 'init', 'profily_register' );
endif;