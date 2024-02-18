<?php
/**
 * Title: 404
 * Slug: cashflow/hidden-404
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

	<!-- wp:heading {"level":1,"align":"wide"} -->
	<h1 class="wp-block-heading alignwide"><?php echo esc_html_x( '404: Not Found', 'Error code for a webpage that is not found.', 'cashflow' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"160px"}},"backgroundColor":"accent-2","className":"is-style-separator-wave"} -->
	<hr class="wp-block-separator has-text-color has-accent-2-color has-accent-2-background-color has-background is-style-separator-wave"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'The page you are looking for could not be found. Try a new search using the form below.', 'Message to convey that a webpage could not be found', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"width":100,"widthUnit":"%","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'cashflow' ); ?>"} /-->
