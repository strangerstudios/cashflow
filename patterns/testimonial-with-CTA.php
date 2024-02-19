<?php
/**
 * Title: Testimonial with CTA
 * Slug: cashflow/testimonial-with-cta
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color"><?php echo esc_html_x( 'See what our satisfied customers have to say!', 'Testimonial heading', 'cashflow' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html_x( 'We believe in the quality of our membership, but we understand that you may want to hear from our satisfied members. Take a look at what they have to say about their experiences with us.', 'Testimonial paragraph', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent-2","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-accent-2-background-color has-background wp-element-button"><?php echo esc_html_x( 'Choose a Plan', 'Testimonial plan button', 'cashflow' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"base","className":"is-style-card-lift"} -->
<div class="wp-block-column is-style-card-lift has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);flex-basis:60%"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"style":{"color":{"text":"#ffcc00"},"elements":{"link":{"color":{"text":"#ffcc00"}}},"typography":{"letterSpacing":"5px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
<p class="has-text-color has-link-color has-large-font-size" style="color:#ffcc00;margin-top:0;margin-bottom:0;letter-spacing:5px"><strong>★★★★★</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html_x( 'Membership has been a priceless asset!', 'Testimonial paragraph strong', 'cashflow' ); ?></strong><br><?php echo esc_html_x( 'I never realized what I was capable of until I started my one-on-one sessions in the Pinnacle tier. It\'s been transformative.', 'Testimonial paragraph continued', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":2509,"width":"auto","height":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="https://demo.cashflowtheme.com/wp-content/uploads/2024/02/meg-wagener-M7fbJyBuAag-unsplash-md.jpg" alt="" class="wp-image-2509" style="aspect-ratio:1;object-fit:cover;width:auto;height:100px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html_x( 'Jane Markel', 'Testimonial name', 'cashflow' ); ?></strong><?php echo esc_html_x( ' from Philadelphia, PA', 'Testimonial name location', 'cashflow' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->