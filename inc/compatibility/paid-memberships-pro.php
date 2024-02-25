<?php
/**
 * Cashflow Paid Memberships Pro integration.
 *
 * @package Cashflow
 *
 * @since 1.0.0
 * @version 1.0.0
 */

// Return early if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Paid Memberships Pro custom styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function cashflow_pmpro_wp_enqueue_scripts(): void {
	// Return early if PMPro is not active.
	if ( ! defined( 'PMPRO_VERSION' ) ) {
		return;
	}

	// Add custom css for Paid Memberships Pro.
	wp_enqueue_style(
		'cashflow-pmpro',
		get_parent_theme_file_uri( 'assets/css/paid-memberships-pro.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'cashflow_pmpro_wp_enqueue_scripts' );
