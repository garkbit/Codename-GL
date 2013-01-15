<?php
	$navigation_background = get_theme_mod('navigation_color');
	$navigation_luminance = an_luminance($navigation_background);
	$navigation_colors = an_colorsplosion($navigation_background);
	
	$body_background = get_theme_mod('body_color');
	$body_luminance = an_luminance($body_background);
	$body_colors = an_colorsplosion($body_background);
	
	$link_color = get_theme_mod('link_color');
?>
<style type="text/css">
/* Body Colors */
body {
	color: <?php echo $body_colors['high_contrast'][50] ?>;
	background: <?php echo $body_background; ?>;
}
h1 {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
h2 {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
	border-bottom: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
}
h3 {
	color: <?php echo $body_colors['high_contrast'][50] ?>;
}
h4, h5, h6 {
	color: <?php echo $body_colors['high_contrast'][50] ?>;
}
a {
	color: <?php echo $link_color; ?>;
}
table tr th {
	background-color: <?php echo $body_colors['high_contrast'][50] ?>;
	color: <?php echo $body_background; ?>;
}
table tr:nth-child(odd) {
	background-color:<?php echo $body_colors['high_contrast'][10] ?>;
}
#wrapper > .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($body_luminance > 50) ? "black" : "white"; ?>.png) repeat 0 0;
}
.pagination a.page-numbers:not(.prev):not(.next) {
	background-color:<?php echo $link_color; ?>;
	color:<?php echo $body_background; ?>;
}
.pagination span.current {
	background-color:<?php echo $body_colors['high_contrast'][50] ?>;
	color:<?php echo $body_background; ?>;
}
.header-search {
	background: <?php echo $body_colors['high_contrast'][10] ?>;
}
.header-search #searchform {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/fade-top-black.png) repeat-x top;
}
.header-search input.field {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/search-glass-<?php echo $bg = ($body_luminance > 50) ? "black" : "white"; ?>.png) no-repeat right center;
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
.header-search input.search-btn {
	background: <?php echo $body_colors['high_contrast'][20] ?>;
	color: <?php echo $body_colors['high_contrast'][10] ?>;
}
.second-menu {
	border-top: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
	border-bottom: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
	background: <?php echo $body_background; ?>;
}
.second-menu ul li {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
.second-menu ul li a {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
.second-menu ul li ul {
	border: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
	border-top: solid 1px <?php echo $body_background; ?>;
	background: <?php echo $body_background; ?>;
}
.second-menu ul li ul li.current a,
.second-menu ul li.sfHover ul li a:hover,
.second-menu ul li ul li a:hover {
	background: <?php echo $body_colors['high_contrast'][10] ?>;
}
.second-menu ul li ul li ul {
	border-top:1px solid <?php echo $body_colors['high_contrast'][20] ?>;
}
.breadcrumbs {
	color: <?php echo $body_colors['high_contrast'][20] ?>;
}
.breadcrumbs a {
	color: <?php echo $body_colors['high_contrast'][20] ?>;
}
.breadcrumbs a:hover,
.breadcrumbs .trail-end {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
.breadcrumbs-without-menu {
	border-top: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
	border-bottom: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
}
.article.list h2 {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
.article.list h2 a:hover {
	color: <?php echo $link_color; ?>;
}
.article img {
	background:<?php echo $body_background; ?>;
	box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
	moz-box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
}
.byline {
	border-color: <?php echo $body_colors['high_contrast'][20] ?>;
}
.entry-meta {
	border-color: <?php echo $body_colors['high_contrast'][20] ?>;
}
.post h2 {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
	border-bottom: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
}
.post h3 {
	color: <?php echo $body_colors['high_contrast'][50] ?>;
}
#content .two-column .col h2 {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
	border-bottom: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
}
.page-links span {
	background-color:<?php echo $body_colors['high_contrast'][50] ?>;
	color:<?php echo $body_background; ?>;
}
.page-links a span {
	background-color: <?php echo $link_color; ?>;
}
#sidebar h3 {
	border-bottom: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
	color: <?php echo $body_colors['high_contrast'][32] ?>;
}
.widget-search .search-text {
	border: solid <?php echo $body_colors['high_contrast'][20] ?> 1px;
	background-color:<?php echo $body_background; ?>;
	color:<?php echo $body_colors['high_contrast'][50] ?>;
}
.widget .col .image {
	box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
	-moz-box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
}
.comment-list li .comment-content,
.comment-list li .ping-content {
	border-top:<?php echo $body_colors['high_contrast'][20] ?> 1px solid;
}
.comment-list li .avatar {	
	box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
	moz-box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30] ?> 0 2px 5px;
}
.comment-list li .comment-content .comment-reply-link,
.comment-list li .ping-content .ping-reply-link {
	background-color:<?php echo $link_color; ?>;
	color:<?php echo $body_background; ?>;
}
.comments-nav {
	background-color:<?php echo $body_colors['high_contrast'][10] ?>;
}
#respond textarea {
	border: solid <?php echo $body_colors['high_contrast'][20] ?> 1px;
	background-color:<?php echo $body_background; ?>;
	color:<?php echo $body_colors['high_contrast'][50] ?>;
}
#respond .text-input {
	border: solid <?php echo $body_colors['high_contrast'][20] ?> 1px;
	background-color:<?php echo $body_background; ?>;
	color:<?php echo $body_colors['high_contrast'][50] ?>;
}
#respond #submit {
	background-color:<?php echo $link_color; ?>;
	color:<?php echo $body_background; ?>;
}
#footer .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($body_luminance > 50) ? "black" : "white"; ?>.png) repeat 0 0;
}
#footer .footer-menu {
	border-top: solid 1px <?php echo $body_colors['high_contrast'][20] ?>;
}
#footer .footer-menu ul li {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
#footer .footer-menu ul li a {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
#footer .copy {
	color: <?php echo $body_colors['high_contrast'][45] ?>;
}
/* End Body colors */


/* Primary Navigation colors */
.navigation {
	background: <?php echo $navigation_background ?>;
	background-image: -ms-linear-gradient(top, <?php echo $navigation_colors['lighter'][30]; ?> 0%, <?php echo $navigation_background ?> 100%);
	background-image: -moz-linear-gradient(top, <?php echo $navigation_colors['lighter'][30]; ?> 0%, <?php echo $navigation_background ?> 100%);
	background-image: -o-linear-gradient(top, <?php echo $navigation_colors['lighter'][30]; ?> 0%, <?php echo $navigation_background ?> 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo $navigation_colors['lighter'][30]; ?>), color-stop(1, <?php echo $navigation_background ?>));
	background-image: -webkit-linear-gradient(top, <?php echo $navigation_colors['lighter'][30]; ?> 0%, <?php echo $navigation_background ?> 100%);
	background-image: linear-gradient(to bottom, <?php echo $navigation_colors['lighter'][30]; ?> 0%, <?php echo $navigation_background ?> 100%);
	box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-moz-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-o-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
}
.navigation .background-texture {
	background: url(<?php echo bloginfo('template_directory'); ?>/stylesheets/images/texture-stripes-<?php echo $bg = ($navigation_luminance > 50) ? "black" : "white"; ?>.png) repeat;
}
.navigation ul li a {
	color: <?php echo $navigation_colors['high_contrast'][45]; ?>;
}
.navigation ul li.sfHover a,.navigation ul li.current a,.navigation ul li a:hover {
	color: <?php echo $navigation_colors['high_contrast'][95]; ?>;
}
.navigation .sub-menu {
	background: <?php echo $navigation_colors['darker'][15]; ?>;
	border-top: solid 1px <?php echo $navigation_colors['darker'][20]; ?>;
	box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-webkit-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
	-moz-box-shadow: <?php echo $body_colors['darker'][30]; ?> 0 1px 4px;
}
.navigation ul li.sfHover ul li a {
	color: <?php echo $navigation_colors['high_contrast'][45]; ?>;
}
.navigation ul li ul li.current a,.navigation ul li.sfHover ul li a:hover,.navigation ul li ul li a:hover {
	color: <?php echo $navigation_colors['high_contrast'][95]; ?>;
}
/* End Primary Navigation colors */



</style>