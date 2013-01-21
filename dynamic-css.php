<?php
	$navigation_advanced = get_theme_mod('navigation_color_advanced');
	$navigation_background	 		= ($navigation_advanced) 	? get_theme_mod('navigation_gradient_end') 			: get_theme_mod('navigation_color') ;
	$navigation_gradient_start		= ($navigation_advanced) 	? get_theme_mod('navigation_gradient_start') 		: shift_luminance($navigation_background, 30, "lighter") ;
	$navigation_gradient_end 		= ($navigation_advanced) 	? get_theme_mod('navigation_gradient_end') 			: $navigation_background ;
	$navigation_text_color			= ($navigation_advanced) 	? get_theme_mod('navigation_text')					: shift_luminance($navigation_background, 55, "high_contrast");
	$navigation_text_hover_color	= ($navigation_advanced) 	? get_theme_mod('navigation_text_hover')			: shift_luminance($navigation_background, 95, "high_contrast");
	$navigation_drop_color			= ($navigation_advanced) 	? get_theme_mod('navigation_drop')					: shift_luminance($navigation_background, 15, "darker");
	$navigation_luminance = an_luminance($navigation_background);
	
	$body_advanced = get_theme_mod('body_color_advanced');
	$body_background 				= ($body_advanced) 			? get_theme_mod('body_background_color')			: get_theme_mod('body_color');
	$body_text		 				= ($body_advanced) 			? get_theme_mod('body_text_color')					: shift_luminance($body_background, 50, "high_contrast");
	$body_link		 				= ($body_advanced) 			? get_theme_mod('body_link_advanced_color')			: get_theme_mod('body_link_color');
	$body_headline_1				= ($body_advanced) 			? get_theme_mod('body_headline_1_color')			: shift_luminance($body_background, 45, "high_contrast");
	$body_headline_2				= ($body_advanced) 			? get_theme_mod('body_headline_2_color')			: shift_luminance($body_background, 50, "high_contrast");
	$body_table_header				= ($body_advanced) 			? get_theme_mod('body_table_header_color')			: shift_luminance($body_background, 45, "high_contrast");
	$body_table_alternating			= ($body_advanced) 			? get_theme_mod('body_table_alternating_color')		: shift_luminance($body_background, 10, "high_contrast");
	$body_search_background			= ($body_advanced) 			? get_theme_mod('body_search_background_color')		: shift_luminance($body_background, 10, "high_contrast");
	$body_search_button				= ($body_advanced) 			? get_theme_mod('body_search_button_color')			: shift_luminance($body_background, 20, "high_contrast");
	$body_line						= ($body_advanced) 			? get_theme_mod('body_line_color')					: shift_luminance($body_background, 20, "high_contrast");
	$body_luminance = an_luminance($body_background);
	
	$breadcrumb_advanced = get_theme_mod('breadcrumb_color_advanced');
	$breadcrumb_text				= ($breadcrumb_advanced)	? get_theme_mod('breadcrumb_text_color')			: shift_luminance($body_background, 45, "high_contrast");
	$breadcrumb_trail				= ($breadcrumb_advanced)	? get_theme_mod('breadcrumb_trail_color')			: shift_luminance($body_background, 20,  "high_contrast");
	$breadcrumb_line				= ($breadcrumb_advanced)	? get_theme_mod('breadcrumb_line_color')			: shift_luminance($body_background, 20, "high_contrast");
	$breadcrumb_highlight			= ($breadcrumb_advanced)	? get_theme_mod('breadcrumb_highlight_color')		: shift_luminance($body_background, 5,  "high_contrast");
	
	$footer_1_advanced = get_theme_mod('footer_1_color_advanced');
	$footer_1_background			= ($footer_1_advanced)		? get_theme_mod('footer_1_background_color')		: get_theme_mod('footer_1_color');
	$footer_1_text					= ($footer_1_advanced)		? get_theme_mod('footer_1_text_color')				: shift_luminance($footer_1_background, 35, "high_contrast");
	$footer_1_headline				= ($footer_1_advanced)		? get_theme_mod('footer_1_headline_color')			: shift_luminance($footer_1_background, 45, "high_contrast");
	$footer_1_link					= ($footer_1_advanced)		? get_theme_mod('footer_1_advanced_link_color')		: get_theme_mod('footer_1_link_color');
	$footer_1_luminance = an_luminance($footer_1_background);
	
	$footer_2_advanced = get_theme_mod('footer_2_color_advanced');
	$footer_2_background			= ($footer_2_advanced)		? get_theme_mod('footer_2_background_color')		: get_theme_mod('footer_2_color');
	$footer_2_text					= ($footer_2_advanced)		? get_theme_mod('footer_2_text_color')				: shift_luminance($footer_2_background, 35, "high_contrast");
	$footer_2_headline				= ($footer_2_advanced)		? get_theme_mod('footer_2_headline_color')			: shift_luminance($footer_2_background, 45, "high_contrast");
	$footer_2_link					= ($footer_2_advanced)		? get_theme_mod('footer_2_advanced_link_color')		: get_theme_mod('footer_2_link_color');
	$footer_2_luminance = an_luminance($footer_2_background);
	
	$footer_3_advanced = get_theme_mod('footer_3_color_advanced');
	$footer_3_background			= ($footer_3_advanced)		? get_theme_mod('footer_3_background_color')		: get_theme_mod('footer_3_color');
	$footer_3_text					= ($footer_3_advanced)		? get_theme_mod('footer_3_text_color')				: shift_luminance($footer_3_background, 35, "high_contrast");
	$footer_3_headline				= ($footer_3_advanced)		? get_theme_mod('footer_3_headline_color')			: shift_luminance($footer_3_background, 45, "high_contrast");
	$footer_3_link					= ($footer_3_advanced)		? get_theme_mod('footer_3_advanced_link_color')		: get_theme_mod('footer_3_link_color');
	$footer_3_luminance = an_luminance($footer_3_background);
?>
<style type="text/css">
/* Body Colors */
body {
	color: <?php echo $body_text; ?>;
	background: <?php echo $body_background; ?>;
}
h1, h1 a {
	color: <?php echo $body_headline_1; ?>;
}
h2 {
	color: <?php echo $body_headline_1; ?>;
	border-bottom: solid 1px <?php echo $body_line; ?>;
}
h2 a {
	color: <?php echo $body_headline_1; ?>;
}
h3 {
	color: <?php echo $body_headline_2; ?>;
}
h4, h5, h6 {
	color: <?php echo $body_headline_2; ?>;
}
a {
	color: <?php echo $body_link; ?>;
}
table tr th {
	background-color: <?php echo $body_table_header; ?>;
	color: <?php echo $body_background; ?>;
}
table tr:nth-child(odd) {
	background-color:<?php echo $body_table_alternating; ?>;
}
#wrapper > .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($body_luminance > 50) ? "black" : "white"; ?>.png) repeat 0 0;
}
.pagination a.page-numbers:not(.prev):not(.next) {
	background-color:<?php echo $body_link; ?>;
	color:<?php echo $body_background; ?>;
}
.pagination span.current {
	background-color:<?php echo $body_text; ?>;
	color:<?php echo $body_background; ?>;
}
.header-search {
	background: <?php echo $body_search_background; ?>;
}
.header-search #searchform {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/fade-top-black.png) repeat-x top;
}
.header-search input.field {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/search-glass-<?php echo $bg = ($body_luminance > 50) ? "black" : "white"; ?>.png) no-repeat right center;
	color: <?php echo $body_text; ?>;
}
.header-search input.search-btn {
	background: <?php echo $body_search_button; ?>;
	color: <?php echo $body_search_background; ?>;
}
.article.list h2 {
	color: <?php echo $body_headline_1; ?>;
}
.article.list h2 a:hover {
	color: <?php echo $body_link; ?>;
}
.article img {
	background:<?php echo $body_background; ?>;
	box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
	moz-box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
	-webkit-box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
}
.byline {
	border-color: <?php echo $body_line ?>;
}
.entry-meta {
	border-color: <?php echo $body_line ?>;
}
.post h2 {
	color: <?php echo $body_headline_1; ?>;
	border-bottom: solid 1px <?php echo $body_line; ?>;
}
.post h3 {
	color: <?php echo $body_headline_2; ?>;
}
#content .two-column .col h2 {
	color: <?php echo $body_headline_1 ?>;
	border-bottom: solid 1px <?php echo $body_line ?>;
}
.page-links span {
	background-color:<?php echo $body_text ?>;
	color:<?php echo $body_background; ?>;
}
.page-links a span {
	background-color: <?php echo $body_link; ?>;
}
#sidebar h3 {
	border-bottom: solid 1px <?php echo $body_line; ?>;
	color: <?php echo $body_headline_2; ?>;
}
.widget.search .search-text {
	border: solid <?php echo $body_line ?> 1px;
	background-color:<?php echo $body_background; ?>;
	color:<?php echo $body_text ?>;
}
.widget .col .image {
	box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
	-moz-box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
	-webkit-box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
}
.comment-list li .comment-content,
.comment-list li .ping-content {
	border-top:<?php echo $body_line ?> 1px solid;
}
.comment-list li .avatar {	
	box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
	moz-box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
	-webkit-box-shadow: <?php echo shift_luminance($body_background, 30, 'darker'); ?> 0 2px 5px;
}
.comment-list li .comment-content .comment-reply-link,
.comment-list li .ping-content .ping-reply-link {
	background-color:<?php echo $body_link; ?>;
	color:<?php echo $body_background; ?>;
}
.comments-nav {
	background-color:<?php echo shift_luminance($body_background, 10, 'high_contrast'); ?>;
}
#respond textarea {
	border: solid <?php echo $body_line ?> 1px;
	background-color:<?php echo $body_background; ?>;
	color:<?php echo $body_text ?>;
}
#respond .text-input {
	border: solid <?php echo $body_line ?> 1px;
	background-color:<?php echo $body_background; ?>;
	color:<?php echo $body_color ?>;
}
#respond #submit {
	background-color:<?php echo $body_link; ?>;
	color:<?php echo $body_background; ?>;
}
#footer .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($body_luminance > 50) ? "black" : "white"; ?>.png) repeat 0 0;
}
#footer .footer-menu {
	border-top: solid 1px <?php echo $body_line ?>;
}
#footer .footer-menu ul li {
	color: <?php echo $body_text; ?>;
}
#footer .footer-menu ul li a {
	color: <?php echo $body_text; ?>;
}
#footer .copy {
	color: <?php echo $body_text; ?>;
}
/* End Body colors */


/* Primary Navigation colors */
.navigation {
	background: <?php echo $navigation_background ?>;
	background-image: -ms-linear-gradient(top, <?php echo $navigation_gradient_start; ?> 0%, <?php echo $navigation_gradient_end ?> 100%);
	background-image: -moz-linear-gradient(top, <?php echo $navigation_gradient_start; ?> 0%, <?php echo $navigation_gradient_end ?> 100%);
	background-image: -o-linear-gradient(top, <?php echo $navigation_gradient_start; ?> 0%, <?php echo $navigation_gradient_end ?> 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo $navigation_gradient_start; ?>), color-stop(1, <?php echo $navigation_gradient_end ?>));
	background-image: -webkit-linear-gradient(top, <?php echo $navigation_gradient_start; ?> 0%, <?php echo $navigation_gradient_end ?> 100%);
	background-image: linear-gradient(to bottom, <?php echo $navigation_gradient_start; ?> 0%, <?php echo $navigation_gradient_end ?> 100%);
	box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-moz-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-o-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
}
.navigation .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($navigation_luminance > 50) ? "black" : "white"; ?>.png) repeat;
}
.navigation ul li a {
	color: <?php echo $navigation_text_color; ?>;
}
.navigation ul li.sfHover a,.navigation ul li.current a,.navigation ul li a:hover {
	color: <?php echo $navigation_text_hover_color; ?>;
}
.navigation .sub-menu {
	background: <?php echo $navigation_drop_color; ?>;
	border-top: solid 1px <?php echo shift_luminance($navigation_drop_color, 20, "darker"); ?>;
	box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-moz-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
}
.navigation ul li.sfHover ul li a {
	color: <?php echo $navigation_text_color; ?>;
}
.navigation ul li ul li.current a,.navigation ul li.sfHover ul li a:hover,.navigation ul li ul li a:hover {
	color: <?php echo $navigation_text_hover_color; ?>;
}
/* End Primary Navigation colors */

/* Secondary Menu / Breadcrumb colors */
.second-menu {
	border-top: solid 1px <?php echo $breadcrumb_line; ?>;
	border-bottom: solid 1px <?php echo $breadcrumb_line; ?>;
	background: <?php echo $body_background; ?>;
}
.second-menu ul li {
	color: <?php echo $breadcrumb_text; ?>;
}
.second-menu ul li a {
	color: <?php echo $breadcrumb_text; ?>;
}
.second-menu ul li ul {
	border: solid 1px <?php echo $breadcrumb_line; ?>;
	border-top: solid 1px <?php echo $body_background; ?>;
	background: <?php echo $body_background; ?>;
}
.second-menu ul li ul li.current a,
.second-menu ul li.sfHover ul li a:hover,
.second-menu ul li ul li a:hover {
	background: <?php echo $breadcrumb_highlight; ?>;
}
.second-menu ul li ul li ul {
	border-top:1px solid <?php echo $breadcrumb_line; ?>;
}
.breadcrumbs {
	color: <?php echo $breadcrumb_trail ?>;
}
.breadcrumbs a {
	color: <?php echo $breadcrumb_trail ?>;
}
.breadcrumbs a:hover,
.breadcrumbs .trail-end {
	color: <?php echo $breadcrumb_text; ?>;
}
.breadcrumbs-without-menu {
	border-top: solid 1px <?php echo $breadcrumb_line; ?>;
	border-bottom: solid 1px <?php echo $breadcrumb_line; ?>;
}
/* End Secondary Menu / Breadcrumb colors */

/* Footer 1 colors */
.widget-type-1 {
	color: <?php echo $footer_1_text; ?>;
	background: <?php echo $footer_1_background; ?>;
}
.widget-type-1 .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($footer_1_luminance > 50) ? "black" : "white"; ?>.png) repeat;
}
.widget-type-1 h2,
.widget-type-1 h3 {
	color:<?php echo $footer_1_headline; ?>;
	<?php if (an_luminance($footer_1_headline) < an_luminance($footer_1_background)) : ?>
		text-shadow: <?php echo shift_luminance($footer_1_headline, 50, 'lighter'); ?> -1px -1px 0px;
	<?php else : ?>
		text-shadow: <?php echo shift_luminance($footer_1_background, 50, 'darker'); ?> 1px 1px 0px;
	<?php endif ?>
}
.widget-type-1 a {
	color:<?php echo $footer_1_link; ?>;
}
/* End Footer 1 colors */

/* Footer 2 colors */
.widget-type-2 {
	color: <?php echo $footer_2_text; ?>;
	background: <?php echo $footer_2_background; ?>;
}
.widget-type-2 .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($footer_2_luminance > 50) ? "black" : "white"; ?>.png) repeat;
}
.widget-type-2 h2,
.widget-type-2 h3 {
	color:<?php echo $footer_2_headline; ?>;
	<?php if (an_luminance($footer_2_headline) < an_luminance($footer_2_background)) : ?>
		text-shadow: <?php echo shift_luminance($footer_2_headline, 50, 'lighter'); ?> -1px -1px 0px;
	<?php else : ?>
		text-shadow: <?php echo shift_luminance($footer_2_background, 50, 'darker'); ?> 1px 1px 0px;
	<?php endif ?>
}
.widget-type-2 a {
	color:<?php echo $footer_2_link; ?>;
}
/* End Footer 2 colors */

/* Footer 3 colors */
.widget-type-3 {
	color: <?php echo $footer_3_text; ?>;
	background: <?php echo $footer_3_background; ?>;
}
.widget-type-3 .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($footer_3_luminance > 50) ? "black" : "white"; ?>.png) repeat;
}
.widget-type-3 h2,
.widget-type-3 h3 {
	color:<?php echo $footer_3_headline; ?>;
	<?php if (an_luminance($footer_3_headline) < an_luminance($footer_3_background)) : ?>
		text-shadow: <?php echo shift_luminance($footer_3_headline, 50, 'lighter'); ?> -1px -1px 0px;
	<?php else : ?>
		text-shadow: <?php echo shift_luminance($footer_3_background, 50, 'darker'); ?> 1px 1px 0px;
	<?php endif ?>
}
.widget-type-3 a {
	color:<?php echo $footer_3_link; ?>;
}
/* End Footer 3 colors */

/* Footer <hr /> colors */
.footer-line-1 {
	background-color: <?php echo shift_luminance($footer_1_background, 30, 'darker'); ?>;
}
.footer-line-2 {
	background-color: <?php echo shift_luminance($footer_2_background, 30, 'darker'); ?>;
}
.footer-line-3 {
	background-color: <?php echo shift_luminance($footer_3_background, 30, 'darker'); ?>;
}
/* End Footer <hr /> colors */



</style>