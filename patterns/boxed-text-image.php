<?php
/**
 * Title: Boxed text with image
 * Slug: cashflow/boxed-text-image
 * Categories: banner, cashflow-all, text
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"borderColor":"contrast-3","backgroundColor":"base"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center has-border-color has-contrast-3-border-color has-base-background-color has-background" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"overlayColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-cover-blob"><span aria-hidden="true" class="wp-block-cover__background has-accent-2-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-image-organic"} -->
<figure class="wp-block-image size-full is-style-image-organic"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets//images/linkedin-sales-solutions-NpyF7rjqmq4-unsplash-md.jpg' ); ?>" alt="<?php esc_attr_e( 'Woman with long hair, wearing a blazer, and leaning against a wall with in a classroom setting', 'cashflow' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:separator {"backgroundColor":"accent-2","className":"is-style-separator-wave"} -->
<hr class="wp-block-separator has-text-color has-accent-2-color has-accent-2-background-color has-background is-style-separator-wave"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'About the Hub', 'Boxed heading', 'cashflow' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'In today\'s fast-paced world, finding the balance between personal development and professional growth can feel like an uphill battle. Distractions, lack of direction, and isolation can derail even the most ambitious individuals.', 'Boxed paragraph one', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Enter Peak Performers Hub - your pathway to transformation. We offer a structured journey through knowledge, community, and personalized support, designed to lift you to new heights in all aspects of life.', 'Boxed paragraph two', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent-2"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-2-background-color has-background wp-element-button"><?php echo esc_html_x( 'Choose a Plan', 'Boxed button', 'cashflow' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->