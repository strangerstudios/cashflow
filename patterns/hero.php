<?php
/**
 * Title: Hero
 * Slug: cashflow/hero
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html_x( 'Welcome, Peak Performer.', 'Hero heading', 'cashflow' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html_x( 'Unlock Your Potential. Elevate Your Performance. Join Our Community.', 'Hero large text', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"fontSize":"large"} -->
<div class="wp-block-buttons has-custom-font-size has-large-font-size"><!-- wp:button {"backgroundColor":"accent-2"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-2-background-color has-background wp-element-button"><?php echo esc_html_x( 'Choose a Plan', 'Hero plan button', 'cashflow' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"overlayColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-cover-blob"><span aria-hidden="true" class="wp-block-cover__background has-accent-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-image-organic-alt"} -->
<figure class="wp-block-image size-full is-style-image-organic-alt"><img src="<?php echo esc_url( get_template_directory_uri() . '/patterns/images/ian-schneider-TamMbr4okv4-unsplash-md.jpg' ); ?>" alt="<?php esc_attr_e( 'Looking down to a cement tiled walkway with the words \'Passion Led Us Here\' and two pairs of feet', 'cashflow' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->