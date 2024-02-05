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

 if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	function cashflow_block_styles() {
		register_block_style(
			'core/column',
			array(
				'name'         => 'card-border',
				'label'        => __( 'Card border', 'cashflow' ),
				'inline_style' => '
				    .is-style-card-border {
                        border: 1px solid var(--wp--preset--color--contrast); 
                        border-radius: var(--wp--preset--spacing--5);
				    	box-shadow: var( --wp--preset--shadow--natural );
                        padding: var(--wp--preset--spacing--10);
				    }
                ',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'         => 'card-border',
				'label'        => __( 'Card border', 'cashflow' ),
				'inline_style' => '
				    .is-style-card-border {
                        border: 1px solid var(--wp--preset--color--contrast); 
                        border-radius: var(--wp--preset--spacing--5);
				    	box-shadow: var( --wp--preset--shadow--natural );
                        padding: var(--wp--preset--spacing--20);
				    }
                ',
			)
		);
	}
endif;
add_action( 'init', 'cashflow_block_styles' );