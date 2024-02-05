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

 if ( ! function_exists( 'cashflow_block_styles' ) ) :
	function cashflow_block_styles() {
		register_block_style(
			'core/column',
			array(
				'name'         => 'card-lift',
				'label'        => __( 'Card lift', 'cashflow' ),
				'inline_style' => '
				    .is-style-card-lift {
						border-radius: var(--wp--preset--spacing--20);
						box-shadow: var(--wp--preset--shadow--lift);
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
						box-shadow: var(--wp--preset--shadow--lift);
						overflow: hidden;
					}
				',
			)
		);
	}
endif;
add_action( 'init', 'cashflow_block_styles' );