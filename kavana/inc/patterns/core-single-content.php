<?php
/**
 * Core Single Content content.
 */
return array(
	'title'      => __( 'Core Single Content', 'kavana' ),
	'categories' => array( 'kavana-basic' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"60px","left":"60px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"30px"}},"border":{"bottom":{"color":"#d6d6d6","width":"1px","style":"solid"}}},"className":"kavana-animate kavana-move-up kavana-delay-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group kavana-animate kavana-move-up kavana-delay-1" style="border-bottom-color:#d6d6d6;border-bottom-style:solid;border-bottom-width:1px;padding-bottom:30px"><!-- wp:post-content {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.6"}},"fontSize":"tiny","fontFamily":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"margin":{"top":"20px"},"padding":{"bottom":"20px"}},"border":{"bottom":{"color":"#d6d6d6","style":"solid","width":"1px"}}},"className":"kavana-animate kavana-move-up kavana-delay-1"} -->
<div class="wp-block-columns kavana-animate kavana-move-up kavana-delay-1" style="border-bottom-color:#d6d6d6;border-bottom-style:solid;border-bottom-width:1px;margin-top:20px;padding-bottom:20px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"text":"#1d1b15"},"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.6"}},"fontSize":"tiny","fontFamily":"secondary"} -->
<p class="has-text-color has-secondary-font-family has-tiny-font-size" style="color:#1d1b15;font-style:normal;font-weight:300;line-height:1.6">Category :</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"color":{"text":"#ad7531"},"elements":{"link":{"color":{"text":"#ad7531"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"tiny","fontFamily":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"text":"#1d1b15"},"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.6"}},"fontSize":"tiny","fontFamily":"secondary"} -->
<p class="has-text-color has-secondary-font-family has-tiny-font-size" style="color:#1d1b15;font-style:normal;font-weight:300;line-height:1.6">Share :</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#1d1b15","iconBackgroundColorValue":"#1d1b15","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"25px","left":"25px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

<!-- wp:social-link {"url":"#","service":"tumblr"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d1b15"},"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"spacing":{"margin":{"top":"50px"}}},"className":"is-style-customheadingstyle kavana-animate kavana-move-up kavana-delay-3","fontFamily":"primary"} -->
<h2 class="has-text-align-center is-style-customheadingstyle kavana-animate kavana-move-up kavana-delay-3 has-text-color has-primary-font-family" style="color:#1d1b15;margin-top:50px;font-size:21px;font-style:normal;font-weight:400;line-height:1.5"><em>Related Posts</em></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":135,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"className":"kavana-animate kavana-move-up kavana-delay-3 kavana-post-template-gap"} -->
<div class="wp-block-query kavana-animate kavana-move-up kavana-delay-3 kavana-post-template-gap"><!-- wp:post-template -->
<!-- wp:post-featured-image {"height":"220px"} /-->

<!-- wp:post-title {"isLink":true,"style":{"color":{"text":"#1d1b15"},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"}},"fontSize":"large","fontFamily":"primary"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"color":{"text":"#1d1b15"},"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"#ad7531"}}}},"fontSize":"tiny","fontFamily":"secondary"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"80px"}}},"className":"kavana-animate kavana-move-up kavana-delay-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group kavana-animate kavana-move-up kavana-delay-5" style="margin-top:80px"><!-- wp:post-comments-form {"style":{"color":{"text":"#1d1b15"},"elements":{"link":{"color":{"text":"#ad7531"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"margin":{"bottom":"40px"}},"color":{"background":"#1d1b15"}},"className":"kavana-animate kavana-move-left kavana-delay-1","layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group kavana-animate kavana-move-left kavana-delay-1 has-background" style="background-color:#1d1b15;margin-bottom:40px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"align":"center","id":471,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"52px","width":"3px"}},"borderColor":"white"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="' . esc_url( KAVANA_URI ) . 'assets/img/photo@2x-8.webp" alt="" class="has-border-color has-white-border-color wp-image-471" style="border-width:3px;border-radius:52px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}},"textColor":"white","fontFamily":"primary"} -->
<h2 class="has-text-align-center has-white-color has-text-color has-primary-font-family" style="margin-top:0px;margin-right:0px;margin-bottom:10px;margin-left:0px;font-size:32px;font-style:normal;font-weight:500;line-height:1.3"><em>Kavana</em></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"10px","bottom":"0px"}}}} -->
<div class="wp-block-columns" style="margin-top:10px;margin-bottom:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.6"}},"textColor":"white","fontSize":"tiny","fontFamily":"secondary"} -->
<p class="has-text-align-center has-white-color has-text-color has-secondary-font-family has-tiny-font-size" style="font-style:normal;font-weight:300;line-height:1.6">Quisque consectetur convallis ex, quis tincidunt ligula placerat et.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"align":"center","id":473,"width":100,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( KAVANA_URI ) . 'assets/img/signature@2x-8.png" alt="" class="wp-image-473" width="100"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"color":{"text":"#1d1b15"},"typography":{"fontSize":"21px","lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}},"className":"is-style-customheadingstyle kavana-animate kavana-move-left kavana-delay-3","fontFamily":"primary"} -->
<h2 class="is-style-customheadingstyle kavana-animate kavana-move-left kavana-delay-3 has-text-color has-primary-font-family" style="color:#1d1b15;margin-bottom:0px;font-size:21px;font-style:normal;font-weight:400;line-height:1.5"><em>Subscribe and follow</em></h2>
<!-- /wp:heading -->

<!-- wp:social-links {"customIconColor":"#1d1b15","iconColorValue":"#1d1b15","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"40px","left":"40px"},"margin":{"top":"20px","bottom":"30px"}}},"className":"is-style-logos-only kavana-animate kavana-move-left kavana-delay-3"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only kavana-animate kavana-move-left kavana-delay-3" style="margin-top:20px;margin-bottom:30px"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:heading {"style":{"color":{"text":"#1d1b15"},"typography":{"fontSize":"21px","lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px","top":"0px"}}},"className":"is-style-customheadingstyle kavana-animate kavana-move-left kavana-delay-5","fontFamily":"primary"} -->
<h2 class="is-style-customheadingstyle kavana-animate kavana-move-left kavana-delay-5 has-text-color has-primary-font-family" style="color:#1d1b15;margin-top:0px;margin-bottom:0px;font-size:21px;font-style:normal;font-weight:400;line-height:1.5"><em>Popular Post</em></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":183,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"className":"kavana-animate kavana-move-left kavana-delay-5"} -->
<div class="wp-block-query kavana-animate kavana-move-left kavana-delay-5"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"height":"80px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"color":{"text":"#1d1b15"}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"},"margin":{"top":"40px"}},"color":{"background":"#1d1b15"}},"className":"kavana-animate kavana-move-left kavana-delay-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group kavana-animate kavana-move-left kavana-delay-7 has-background" style="background-color:#1d1b15;margin-top:40px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}}},"textColor":"white","fontFamily":"primary"} -->
<h2 class="has-white-color has-text-color has-primary-font-family" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:22px;font-style:normal;font-weight:500;line-height:1.5">Subscribe To My Newsletter</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"20px","bottom":"20px"}}},"textColor":"white"} -->
<div class="wp-block-columns has-white-color has-text-color" style="margin-top:20px;margin-bottom:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"300"}},"textColor":"white","fontSize":"tiny","fontFamily":"secondary"} -->
<p class="has-white-color has-text-color has-secondary-font-family has-tiny-font-size" style="font-style:normal;font-weight:300;line-height:1.6">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolore magna</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"400","lineHeight":"1","textTransform":"uppercase","letterSpacing":"1.5px"}},"className":"is-style-custombuttonstyle1","fontFamily":"secondary"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-custombuttonstyle1 has-secondary-font-family" style="font-size:12px;font-style:normal;font-weight:400;letter-spacing:1.5px;line-height:1;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" href="#">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"color":{"text":"#1d1b15"},"typography":{"fontSize":"21px","lineHeight":"1.5","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}},"className":"is-style-customheadingstyle kavana-animate kavana-move-left kavana-delay-7"} -->
<h2 class="is-style-customheadingstyle kavana-animate kavana-move-left kavana-delay-7 has-text-color" style="color:#1d1b15;margin-bottom:0px;font-size:21px;font-style:normal;font-weight:400;line-height:1.5"><em>Popular Post</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"40px"}}},"className":"kavana-animate kavana-move-left kavana-delay-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group kavana-animate kavana-move-left kavana-delay-7" style="margin-bottom:40px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"5px","left":"5px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( KAVANA_URI ) . 'assets/img/core-2.webp","id":488,"dimRatio":0,"minHeight":100,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-488" alt="" src="' . esc_url( KAVANA_URI ) . 'assets/img/core-2.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( KAVANA_URI ) . 'assets/img/core-3.webp","id":490,"dimRatio":0,"minHeight":100,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-490" alt="" src="' . esc_url( KAVANA_URI ) . 'assets/img/core-3.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( KAVANA_URI ) . 'assets/img/core-5.webp","id":491,"dimRatio":0,"minHeight":100} -->
<div class="wp-block-cover" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-491" alt="" src="' . esc_url( KAVANA_URI ) . 'assets/img/core-5.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"5px","left":"5px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( KAVANA_URI ) . 'assets/img/core-1.webp","id":492,"dimRatio":0,"minHeight":100,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-492" alt="" src="' . esc_url( KAVANA_URI ) . 'assets/img/core-1.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( KAVANA_URI ) . 'assets/img/core-4.webp","id":493,"dimRatio":0,"minHeight":100} -->
<div class="wp-block-cover" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-493" alt="" src="' . esc_url( KAVANA_URI ) . 'assets/img/core-4.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( KAVANA_URI ) . 'assets/img/core-6.webp","id":494,"dimRatio":0,"minHeight":100} -->
<div class="wp-block-cover" style="min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-494" alt="" src="' . esc_url( KAVANA_URI ) . 'assets/img/core-6.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:image {"id":496,"sizeSlug":"large","linkDestination":"none","className":"kavana-animate kavana-move-left kavana-delay-7"} -->
<figure class="wp-block-image size-large kavana-animate kavana-move-left kavana-delay-7"><img src="' . esc_url( KAVANA_URI ) . 'assets/img/banner.webp" alt="" class="wp-image-496"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
