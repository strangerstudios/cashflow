<?php
/**
 * Title: Text with Image
 * Slug: cashflow/text-with-image
 * Categories: banner, cashflow-all, text
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"accent-2","className":"is-style-separator-wave"} -->
<hr class="wp-block-separator has-text-color has-accent-2-color has-accent-2-background-color has-background is-style-separator-wave"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'A Note From the Founder', 'Sample heading for image', 'cashflow' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'From my own journey of highs and lows, I learned that growth is a community effort.', 'Sample paragraph for image', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'That\'s why I founded Peak Performers Hub—to create a space where ambitious individuals can unlock their true potential together. Welcome to our community.', 'Sample paragraph with emphasis for image', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button"><?php echo esc_html_x( 'Start Free', 'Start button text', 'cashflow' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-color has-text-color has-link-color wp-element-button"><?php echo esc_html_x( 'Compare Plans', 'Compare plans button text', 'cashflow' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"overlayColor":"contrast-3","isDark":false,"className":"is-style-cover-blob","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light is-style-cover-blob"><span aria-hidden="true" class="wp-block-cover__background has-contrast-3-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-image-organic"} -->
<figure class="wp-block-image size-full is-style-image-organic"><img src="<?php echo esc_url( get_template_directory_uri() . '/patterns/images/constantin-panagopoulos-9lf_erPHYG0-unsplash-md.jpg' ); ?>" alt="<?php esc_attr_e( 'Sample image for text with image pattern', 'cashflow' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","fontSize":"large","fontFamily":"heading"} -->
<p class="has-text-align-center has-heading-font-family has-large-font-size"><?php echo esc_html_x( 'Samira Khan, Founder &amp; Chief Visionary', 'Sample large paragraph text', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->