<?php
/**
 * Title: Text with pricing
 * Slug: cashflow/text-with-pricing
 * Categories: banner, call-to-action, cashflow-all, text
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left"} -->

<h2 class="wp-block-heading has-text-align-left"><?php echo esc_html_x( 'Elevate your growth.', 'Sample text for pricing header', 'cashflow' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Embark on a journey of personalized development with the Pinnacle tier, designed for those who seek the ultimate in personal and professional growth.', 'Sample text for growth paragraph', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Enjoy exclusive monthly strategy sessions tailored to your unique goals, led by our industry-leading experts. The Pinnacle experience is more than just a membership; it\'s your gateway to reaching new heights.', 'Sample text for pricing paragraph', 'cashflow' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","backgroundColor":"base","className":"is-style-default"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-default has-base-background-color has-background" style="flex-basis:50%">
<?php if ( defined( 'PMPRO_ADVANCED_LEVELS_DIR' ) ) : ?>
	<!-- wp:pmpro-advanced-levels/advanced-levels-page {"back_link":false,"expiration":false,"levels":"1"} /-->
<?php endif ?>
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->