<?php
/**
 * Core Home Popular content.
 */
return array(
	'title'      => __( 'Core Home Popular', 'kavana' ),
	'categories' => array( 'kavana-basic' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"30px"}},"color":{"text":"#1d1b15"}},"className":"is-style-customheadingstyle kavana-animate kavana-move-up kavana-delay-1"} -->
<h2 class="has-text-align-center is-style-customheadingstyle kavana-animate kavana-move-up kavana-delay-1 has-text-color" style="color:#1d1b15;margin-bottom:30px;font-size:21px;font-style:normal;font-weight:400"><em>Most Popular</em></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":24,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"className":"kavana-animate kavana-move-up kavana-delay-3 kavana-post-template-gap","layout":{"type":"default"}} -->
<div class="wp-block-query kavana-animate kavana-move-up kavana-delay-3 kavana-post-template-gap"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"height":"200px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:post-title {"isLink":true,"style":{"color":{"text":"#1d1b15"},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"}},"fontSize":"large","fontFamily":"primary"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"color":{"text":"#1d1b15"},"typography":{"lineHeight":"1.7","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"#ad7531"}}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"15px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"tiny","fontFamily":"secondary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
);
