<?php
/**
 * Block Styling Example functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Cashflow
 * @since Cashflow 1.0
 */

 /* Initial theme setup of styling and turns off core block patterns in browser */
 if ( ! function_exists( 'cashflow_setup' ) ) {

	/**
	 * Initialize theme defaults and register support for WordPress features.
	 */
	function cashflow_setup() {

		// Enqueue editor style sheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns support, comment out to bring back support in theme.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'cashflow_setup' );

/**
 * Enqueue theme styles and scripts for the theme specifically in style.css file.
 */
function cashflow_enqueue_styles_scripts() {

	// Enqueue theme style sheet.
	wp_enqueue_style( 'cashflow', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'cashflow' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'cashflow_enqueue_styles_scripts' );

/**
 * Adds block style variations that the theme supports.
 */
if ( ! function_exists( 'cashflow_block_styles' ) ) :
	function cashflow_block_styles() {
		register_block_style(
			'core/cover',
			array(
				'name'         => 'cover-blob',
				'label'        => __( 'Blob', 'cashflow' ),
				'inline_style' => '
					.is-style-cover-blob .wp-block-cover__background {
						border-radius: 40% 60% 60% 40% / 70% 30% 70% 30%;
						margin: 40px;
					}
				',
			)
		);
		register_block_style(
			'core/cover',
			array(
				'name'         => 'cover-slash',
				'label'        => __( 'Slash', 'cashflow' ),
				'inline_style' => '
					.is-style-cover-slash .wp-block-cover__background {
						clip-path: polygon(0 1%, 100% 0%, 100% 94%, 0% 100%);
						overflow: hidden;
					}
				',
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'         => 'card-lift',
				'label'        => __( 'Card lift', 'cashflow' ),
				'inline_style' => '
					.is-style-card-lift {
						border-radius: var(--wp--preset--spacing--20);
						box-shadow: var(--wp--custom--shadow--lift);
						overflow: hidden;
					}
				',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'         => 'card-lift',
				'label'        => __( 'Card lift', 'cashflow' ),
				'inline_style' => '
					.is-style-card-lift {
						border-radius: var(--wp--preset--spacing--20);
						box-shadow: var(--wp--custom--shadow--lift);
						overflow: hidden;
					}
				',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'         => 'group-slash',
				'label'        => __( 'Slash', 'cashflow' ),
				'inline_style' => '
					.is-style-group-slash {
						clip-path: polygon(0 1%, 100% 0%, 100% 94%, 0% 100%);
					}
				',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'image-organic',
				'label'        => __( 'Organic', 'cashflow' ),
				'inline_style' => '
					.is-style-image-organic {
						border-radius: 88% 12% 86% 14% / 24% 87% 13% 76%;
						overflow: hidden;
					}
				',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'image-organic-alt',
				'label'        => __( 'Organic (alt)', 'cashflow' ),
				'inline_style' => '
					.is-style-image-organic-alt {
						border-radius: 12% 88% 14% 86% / 87% 24% 76% 13%;
						overflow: hidden;
					}
				',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'image-slash',
				'label'        => __( 'Slash', 'cashflow' ),
				'inline_style' => '
					.is-style-image-slash {
						clip-path: polygon(0 1%, 100% 0%, 100% 94%, 0% 100%);
						overflow: hidden;
					}
				',
			)
		);
		register_block_style(
			'core/separator',
			array(
				'name'         => 'separator-slash',
				'label'        => __( 'Slash', 'cashflow' ),
				'inline_style' => '
					.wp-block-separator.is-style-separator-slash {
						background: transparent !important;
						border: none;
						height: auto;
						line-height: 1;
						text-align: center;
					}
					.wp-block-separator.is-style-separator-slash:before {
						color: currentColor;
						content: "/ / /";
						font-family: serif;
						font-size: var(--wp--preset--font-size--large);
					}
				',
			)
		);
		register_block_style(
			'core/separator',
			array(
				'name'         => 'separator-wave',
				'label'        => __( 'Wave', 'cashflow' ),
				'inline_style' => '
					.wp-block-separator.is-style-separator-wave {
						border: none;
						height: 40px;
						--mask:
							radial-gradient(23.3px at 50% calc(100% + 16.50px),#0000 calc(99% - 2px),#000 calc(101% - 2px) 99%,#0000 101%) calc(50% - 30px) calc(50% - 8.5px + .5px)/60px 17px repeat-x,
							radial-gradient(23.3px at 50% -16.5px,#0000 calc(99% - 2px),#000 calc(101% - 2px) 99%,#0000 101%) 50% calc(50% + 8.5px)/60px 17px repeat-x;
						-webkit-mask: var(--mask);
						mask: var(--mask);
						max-width: 200px;
						width: 32%;
					}
				',
			)
		);
	}
endif;
add_action( 'init', 'cashflow_block_styles' );

/**
 * Register block pattern categories for this theme that are unique.
 */
function cashflow_register_pattern_categories() {

	register_block_pattern_category(
		'cashflow-all',
		array(
			'label'       => __( 'Cashflow', 'cashflow' ),
			'description' => __( 'A collection of patterns for Cashflow.', 'cashflow' ),
		)
	);

	register_block_pattern_category(
		'cashflow-testimonial',
		array(
			'label'       => __( 'Testimonials', 'cashflow' ),
			'description' => __( 'A collection of testimonial patterns for Cashflow.', 'cashflow' ),
		)
	);
}
add_action( 'init', 'cashflow_register_pattern_categories' );

/**
 * Compatibility for Paid Memberships Pro Plugin. Only loads if the plugin is active and if not will simply return nothing.
 * This loads styles specific for the plugin and those can be found in assets/css/paid-memberships-pro.css
 */
require_once get_parent_theme_file_path( 'inc/compatibility/paid-memberships-pro.php' );

/**
 * Fallback to the Cashflow icon if not set.
 *
 * @since TBD
 *
 * @param string $block_content The block content.
 * @return string
 */
function cashflow_site_logo( string $block_content ) : string {

	// Return early if site logo is set.
	if ( ! empty( $block_content ) ) {
		return $block_content;
	}

	// Use the Cashflow logo as the fallback.
	$block_content = '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/cashflow-icon.png' ) . '"' . ' alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="wp-block-site-logo__image" width="70" style="border-radius: 100%;" />';

	// Return the block content.
	return $block_content;
}
add_filter( 'render_block_core/site-logo', 'cashflow_site_logo' );
