<?php
/**
 * Core Search Blog content.
 */
return array(
	'title'      => __( 'Core Search Blog', 'kavana' ),
	'categories' => array( 'kavana-basic' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"textColor":"third","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group has-third-color has-text-color" style="padding-top:80px;padding-bottom:80px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:query {"queryId":24,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"kavana-post-template-gap"} -->
<div class="wp-block-query kavana-post-template-gap"><!-- wp:post-template {"className":"kavana-animate kavana-move-up kavana-delay-3"} -->
<!-- wp:post-featured-image {"isLink":true,"height":"220px","align":"wide","style":{"spacing":{"margin":{"bottom":"20px","right":"0px"}}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1"},"elements":{"link":{"color":{"text":"#ad7531"}}},"color":{"text":"#ad7531"}},"backgroundColor":"white","fontFamily":"secondary"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"right":"0px"}},"color":{"text":"#1d1b15"}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"20px","bottom":"20px","right":"0px"}},"elements":{"link":{"color":{"text":"#ad7531"}}},"color":{"text":"#1d1b15"},"typography":{"lineHeight":"2","fontStyle":"normal","fontWeight":"300"}},"fontSize":"tiny","fontFamily":"secondary"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|third"}}}},"textColor":"primary","className":"kavana-animate kavana-move-up kavana-delay-5","layout":{"type":"flex","justifyContent":"center"},"fontFamily":"secondary"} -->
<!-- wp:query-pagination-previous {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"tiny","fontFamily":"secondary"} /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"tiny"} /-->

<!-- wp:query-pagination-next {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"tiny","fontFamily":"secondary"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->',
);
