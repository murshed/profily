<?php
/**
 * Title: Footer
 * Slug: profily/footer
 * Categories: profily-patterns, footer
 */

return array(
	'title'      => __( 'Default footer', 'profily' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:80px;padding-bottom:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"65%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:65%"><!-- wp:paragraph {"textColor":"contrast-4","fontSize":"tiny-plus"} -->
	<p class="has-contrast-4-color has-text-color has-tiny-plus-font-size">Want to do any project with us ?</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"textDecoration":"underline"}},"textColor":"base"} -->
	<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="text-decoration:underline">hello@theme.com</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"35%"} -->
	<div class="wp-block-column" style="flex-basis:35%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
	<h6 class="wp-block-heading has-base-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)">Contact</h6>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"textColor":"contrast-4"} -->
	<p class="has-contrast-4-color has-text-color">+ 88 324 4562</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"contrast-4"} -->
	<p class="has-contrast-4-color has-text-color">Germany — 785 15h Street, Office 478 Berlin, De 81566</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"left":"0"}}}} -->
	<div class="wp-block-column" style="padding-left:0;flex-basis:20%"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"base"} -->
	<h6 class="wp-block-heading has-base-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)">Follow</h6>
	<!-- /wp:heading -->
	
	<!-- wp:list {"style":{"typography":{"textTransform":"capitalize","lineHeight":"2"},"spacing":{"margin":{"left":"0"},"padding":{"left":"20px"}},"color":{"text":"#e7e5e5"}},"className":"is-style-default list-dark-bg","fontSize":"tiny"} -->
	<ul class="is-style-default list-dark-bg has-text-color has-tiny-font-size" style="color:#e7e5e5;margin-left:0;padding-left:20px;line-height:2;text-transform:capitalize"><!-- wp:list-item -->
	<li><a href="#">facebook</a></li>
	<!-- /wp:list-item -->
	
	<!-- wp:list-item -->
	<li><a href="#">twitter</a></li>
	<!-- /wp:list-item -->
	
	<!-- wp:list-item -->
	<li><a href="#">linkedin</a></li>
	<!-- /wp:list-item -->
	
	<!-- wp:list-item -->
	<li><a href="#">youtube</a></li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom","width":"18%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:18%"><!-- wp:paragraph {"align":"right","textColor":"primary","className":"dark-bg-link"} -->
	<p class="has-text-align-right dark-bg-link has-primary-color has-text-color"><strong><a href="#">Back to top</a></strong></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"#f0f2f51c","width":"1px"},"right":{},"bottom":{},"left":{}}}} -->
	<div class="wp-block-columns alignwide" style="border-top-color:#f0f2f51c;border-top-width:1px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":5,"textColor":"base"} -->
	<h5 class="wp-block-heading has-base-color has-text-color">Profily.</h5>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"right","textColor":"base"} -->
	<p class="has-text-align-right has-base-color has-text-color">@Copyright Reserved to pxelcode 2023</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
