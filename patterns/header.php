<?php
/**
 * Title: Header
 * Slug: cashflow/header
 * Categories: header
 */
?>
<!-- wp:group {"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"30px","top":"30px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:30px;padding-bottom:30px">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">

			<!-- wp:site-logo /-->

			<!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large"} /-->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group">

			<!-- wp:navigation {"ref":2439,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-buttons">

				<!-- wp:button {"textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-color has-text-color has-link-color wp-element-button"><?php esc_html_e( 'Log In', 'cashflow' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"accent"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button"><?php esc_html_e( 'Join Now', 'cashflow' ); ?></a></div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
