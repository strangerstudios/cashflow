<?php
/**
 * Title: List of posts, default
 * Slug: membership/posts-default
 * Categories: query
 * Block Types: core/query
 * Inserter: no
 */
?>

<!-- wp:query {"tagName":"main","layout":{"inherit":true}} -->
<main class="wp-block-query">
	<!-- wp:post-template -->
	<!-- wp:group -->
	<div class="wp-block-group">
		<!-- wp:post-title {"level":1} /-->
		<!-- wp:post-featured-image {"isLink":true} /-->
		<!-- wp:post-content /-->
		<!-- wp:group {"layout":{"type":"flex"}, "style":{"typography":{"fontSize":"14px"}}} -->
		<div class="wp-block-group" style="font-size:14px">
			<!-- wp:post-author {"showAvatar":false,"showBio":false} /-->
			<!-- wp:post-date {"isLink":true} /-->
			<!-- wp:post-terms {"term":"category"} /-->
			<!-- wp:post-terms {"term": "post_tag"} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:spacer {"height":40} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
		<!-- wp:query-pagination -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</main>
<!-- /wp:query -->