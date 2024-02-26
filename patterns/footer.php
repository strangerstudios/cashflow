<?php
/**
 * Title: Footer
 * Slug: cashflow/footer
 * Categories: footer
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"accent","textColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-accent-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:separator {"backgroundColor":"accent-2","className":"is-style-separator-wave"} -->
		<hr class="wp-block-separator has-text-color has-accent-2-color has-accent-2-background-color has-background is-style-separator-wave"/>
		<!-- /wp:separator -->

	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"fontSize":"medium","fontFamily":"body"} -->
				<p class="has-body-font-family has-medium-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"medium"} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:social-links {"iconBackgroundColor":"accent-2","iconBackgroundColorValue":"#008473","showLabels":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-visible-labels has-icon-background-color">

				<!-- wp:social-link {"url":"#","service":"x","label":"Twitter"} /-->

				<!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram","label":"Instagram"} /-->
			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->