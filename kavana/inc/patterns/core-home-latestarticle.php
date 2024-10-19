<?php
/**
 * Core Home Article content.
 */
return array(
	'title'      => __( 'Core Home Article', 'kavana' ),
	'categories' => array( 'kavana-basic' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"80px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-bottom:80px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"30px"}},"color":{"text":"#1d1b15"}},"className":"is-style-customheadingstyle kavana-animate kavana-move-up kavana-delay-1kavana-animate kavana-move-up kavana-delay-5"} -->
<h2 class="has-text-align-center is-style-customheadingstyle kavana-animate kavana-move-up kavana-delay-1kavana-animate kavana-delay-5 has-text-color" style="color:#1d1b15;margin-bottom:30px;font-size:21px;font-style:normal;font-weight:400"><em>Latest Articles</em></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"kavana-animate kavana-move-up kavana-delay-7  kavana-post-template-gap"} -->
<div class="wp-block-query kavana-animate kavana-move-up kavana-delay-7  kavana-post-template-gap"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"220px","align":"wide","style":{"spacing":{"margin":{"bottom":"20px","right":"0px"}}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1"},"elements":{"link":{"color":{"text":"#ad7531"}}},"color":{"text":"#ad7531"}},"backgroundColor":"white","fontFamily":"secondary"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"right":"0px"}},"color":{"text":"#1d1b15"}},"className":"is-style-default","fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"15px","bottom":"0px","right":"0px"}},"elements":{"link":{"color":{"text":"#ad7531"}}},"color":{"text":"#1d1b15"},"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.7"}},"fontSize":"tiny","fontFamily":"secondary"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
);
