<?php
/**
 * Title: Text with CTA
 * Slug: cashflow/text-with-cta
 * Categories: banner, call-to-action, cashflow-all, text
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:separator {"backgroundColor":"contrast-3","className":"is-style-separator-wave"} -->
<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-separator-wave"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Join 1,647+ peak performers.', 'Sample heading for CTA', 'cashflow' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Ready to transform your life?', 'Sample action header centre align', 'cashflow' ); ?>
<br>
<mark style="background-color:var(--wp--preset--color--accent-3)" class="has-inline-color"><strong><?php echo esc_html_x( 'Start Your Transformation', 'Sample action header color', 'cashflow' ); ?></strong></mark> <?php echo esc_html_x( 'today with our free Ascent membership.', 'Sample action header closing', 'cashflow' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button"><?php echo esc_html_x( 'Join Ascent Membership Now', 'Button for membership', 'cashflow' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"backgroundColor":"contrast-3","className":"is-style-separator-wave"} -->
<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-separator-wave"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->