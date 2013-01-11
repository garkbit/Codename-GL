<?php

header('Content-type: text/css');

$a2d50 = 'c7c7c7';
$a3d50 = 'a8a8a8';
$a4d50 = '606060';

?>

* {
	margin: 0;
	padding: 0;
	outline: 0;
}

body, html {
	height: 100%;
}

body {
	min-width: 960px;
}

/*h1, .article.list h2 {
	padding: 50px 0 0 0;
	margin:0;
}*/



h1, .article.list h2 {
	padding: 5px 0 10px 0;
	clear:both;
}

.article-header {
	padding: 45px 0 0 0;
}

.article-header p {
	font-size: 18px;
	line-height: 27px;
	font-weight: 600;
	font-style: italic;
}

.article-header h1, .article.list .article-header h2 {
	padding:0;
	margin: 0;
}

h2 {
	padding: 5px 0 10px 0;
	margin: 0 0 10px 0;
	clear:both;
}

h3 {
	padding: 5px 0 19px 0;
	clear:both;
}

h4, h5, h6 {
	padding: 5px 0 10px 0;
	clear:both;
}

p {
	padding: 0 0 25px 0;
}

a {
	text-decoration: none;
	cursor: pointer;
}

a img {
	border: 0;
}

ol, ul {
	list-style: none outside none;
}

textarea {
	overflow: auto;
}

.article blockquote {
	margin:10px 30px;
}

.article blockquote cite {
	float:right;
}

.article address, .article pre {
	margin:10px 0 35px 30px;
}

.article q:before, .article q:after {
	content: '"';
}

.article table {
	margin:10px 0;
}

.article table tr th, .article table tr td {
	padding:2px 5px;
}

.article dl {
	margin:10px 30px;
}

.article dl dd {
	margin: 5px 0 10px 30px;
}

.article ul {
	list-style-type: disc;
	margin: 5px 20px;
}

.article ul li , .article ol li{
	margin: 5px 0;
}

.article ol {
	list-style-type: decimal;
	margin: 5px 20px;
}

.article img {
	display: block;
	padding:5px;
	margin:20px 20px 20px 0;
}

.article img {
	max-width:610px;
	height:auto;
}

.article img.aligncenter {
	margin: 20px auto;
}

.article img.alignleft {
	margin: 0 20px 20px 0;
}

.article img.alignright {
	margin: 0 0 20px 20px;
}

.article .wp-caption.aligncenter {
	margin:20px auto;
}

.article .wp-caption.alignleft {
	margin: 0 20px 20px 0;
}

.article .wp-caption.alignright {
	margin: 0 0 20px 20px;
}

.article .wp-caption  .wp-caption-text {
	margin: 0 auto;
	text-align:center;
}

.article .wp-caption img {
	margin:0;
}

.gallery .gallery-item {
	margin: 0;
	float:left;
	width:33%;
}

.gallery .gallery-row {
	clear:both;
	margin-bottom:20px;
}

.gallery .gallery-row:after {
	visibility: hidden;
	display:block;
	font-size:0;
	content:" ";
	clear:both;
	height:0;
}

.gallery .gallery-item img {
	margin:0 auto;
}

.gallery .gallery-item  .gallery-caption {
	text-align:center;
	margin:5px 0 0 0;
}

.article .chat-author {
	font-weight: 600;
}

.article .chat-text {
	margin-left: 30px;
}

.byline {
	border-bottom: 1px solid;
	margin: 5px 0 25px 0;
	padding: 0 0 5px 0;
}

.entry-meta {
	border-top: 1px solid;
	margin: 5px 0 5px 0;
	padding: 0 0 5px 0;
	clear:both;
}

.cl {
	display: block;
	height: 0;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
	clear: both;
}

.notext {
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}

.left, .alignleft {
	float: left;
	display: inline;
}

.right, .alignright {
	float: right;
	display: inline;
}

.shell {
	width: 940px;
	margin: 0 auto;
}

#comments {
	margin-top:60px;
}

.comment-list li .avatar {
	width:60px;
	height:60px;
	float:left;
	margin-right:20px;
	box-shadow: #858585 0 2px 5px;
	moz-box-shadow: #858585 0 2px 5px;
	-webkit-box-shadow: #858585 0 2px 5px;
}

.comment-list li .comment-content-wrap {
	margin-left:80px;
}

.comment-list li {
	margin-bottom:60px;
}

.comment-list li .comment-content,
.comment-list li .ping-content {
	border-top:#c7c7c7 1px solid;
}

.comment-list li .comment-content .comment-meta,
.comment-list li .ping-content .ping-meta {
	font-size:12px;
}

.comment-list li .comment-content .comment-meta .permalink,
.comment-list li .comment-content .comment-meta .comment-edit-link,
.comment-list li .ping-content .ping-meta .permalink,
.comment-list li .ping-content .ping-meta .comment-edit-link {
	float:right;
	margin-left: 5px;
}

.comment-list li .comment-content .comment-reply-link,
.comment-list li .ping-content .ping-reply-link {
	float:right;
	font-weight:bold;
	padding:2px 8px;
	background-color:#0252AA;
	color:#fbfbfb;
	font-size:12px;
}

.comment-list .depth-2 {
	margin-left:80px;
}

.comment-list .depth-3 {
	margin-left:160px;
}

.comment-list .depth-4,
.comment-list .depth-5,
.comment-list .depth-6,
.comment-list .depth-7,
.comment-list .depth-8,
.comment-list .depth-9,
.comment-list .depth-10 {
	margin-left:240px;
}

.comments-nav {
	background-color:#e2e2e2;
	margin-bottom:20px;
	margin-top:50px;
	padding:0 5px;
}

.comments-nav strong {
	font-weight:600;
}

.comments-nav .next-link,
.comments-nav .prev-link,
.comments-nav .page-numbers {
	float:right;
	font-size:12px;
	margin-left:20px;
}

.loop-nav .previous{
	font-size:12px;
	float:left;
}

.loop-nav .next {
	font-size:12px;
	float:right;
}

#respond {
	margin-bottom:20px;
}

#respond h3 {
	font-style:normal;
	font-weight:600;
	font-size: 24px;
}

#respond h3 small {
	font-size:12px;
	text-transform:none;
}

#respond label {
	font-size:12px;
}

#respond textarea {
	display:block;
	width:100%;
	border: solid #c7c7c7 1px;
	background-color:#fbfbfb;
	font-size:18px;
	font-weight:normal;
	color:#787878;
	padding:5px;
}

#respond .text-input {
	display:block;
	border: solid #c7c7c7 1px;
	background-color:#fbfbfb;
	font-size:18px;
	font-weight:normal;
	color:#787878;
	padding:5px;
}

#respond #submit {
	background-color:#0252AA;
	color:#fbfbfb;
	font-size:12px;
	font-weight:bold;
	float:right;
	border:none;
	padding:5px 10px;
	cursor:pointer;
}


#wrapper {
	min-height: 100%;
	height: auto !important;
	height: 100%;
	margin: 0 auto;
}

#wrapper > .background-texture {
	background: url(images/texture-stripes-black.png) repeat 0 0;
}

#wrapper > .background-texture > .fade-bottom {
	background: url(images/fade-bottom-white.png) repeat-x 0 0;
}

#header {
	padding: 20px 0;
	position: relative;
	height: 100%;
	z-index: 10;
}

#logo {
	width: 300px;
	float: left;
	display: inline;
}

#logo a {
	height: 120px;
	display: block;
}

.navigation {
	float: right;
	display: inline;
	width: 620px;
	margin: 60px 0 0 0;
}

.navigation ul {
	/*float: left;
	display: inline;*/
	display: table;
	width:100%;
}

.navigation ul li {
	position: relative;
	/*float: left;
	display: inline;
	padding: 0 1px 0 0;*/
	display: table-cell;
	text-align:center;
}

.navigation ul li a {
	float: left;
	padding: 20px 0 0 0;
	width:100%;
}

.navigation ul li.sfHover a,
.navigation ul li.current a,
.navigation ul li a:hover {
	background: none;
	text-decoration: none;
}

.navigation ul li:last-child,
.navigation ul li.last {
	background: none;
	padding: 0;
}

.navigation ul li ul {
	position: absolute;
	top: 100%;
	left: 0;
	float: none;
	width: 200px;
	padding: 10px 0;
	display:none;
}

.navigation ul li ul li ul {
	position: absolute;
	top:-10px;
	left: 0;
}

.navigation ul li ul li {
	display: block;
	float: none;
	text-align:left;
}

.navigation ul li ul li a {
	display: block;
	float: none;
	padding: 2px 5px 2px 10px;
	background: none;
	min-height: 21px;
}

.navigation ul li ul li:last-child a {
	padding: 0 10px;
}

.navigation ul li.sfHover ul li a {
	background: none;
}

.navigation-type-2 ul li ul li a,
.navigation-type-2 ul li.sfHover ul li a {
	background: none;
}

.navigation-wide {
	float: none;
	display: block;
	position: relative;
	z-index: 11;
	margin: 0 0 20px 0;
	width: 940px;
}

.navigation-wide ul li a {
	padding: 20px 23px 0 23px;
}

.header-search {
	position: absolute;
	top: 30px;
	right: 0;
	width: 300px;
	height: 40px;}

.header-search input.field {
	float: right;
	display: inline;
	width: 181px;
	padding: 9px 32px 9px 0;
	border: 0;
	margin: 0 9px 0 0;
}

.header-search input.search-btn {
	float: left;
	display: inline;
	width: 70px;
	height: 40px;
	padding: 5px 0 0 0;
	border: 0;
	cursor: pointer;
}

.article input {
	padding:3px;
}

.header-c {
	padding-top: 0 !important;
}

.header-c .header-search {
	top: 90px;
	right: 20px;
}

#main {
	padding: 0 0 40px 0;
}

.main-c {
	text-align: justify;
}

.second-menu {
	position: relative;
	z-index: 8;
}

.second-menu ul {
	display:table;
	width:100%;
}

.second-menu ul li {
	position: relative;
	float: left;
	display: inline;
	padding: 0 80px 0 0;
}

.second-menu ul li.first {
	 }

.second-menu ul li a {
	float: left;
	display: inline;
}

.second-menu ul li.sfHover a,
.second-menu ul li.current a,
.second-menu ul li a:hover {
	text-decoration: none;
}

.second-menu ul li:last-child,
.second-menu ul li.last {
	padding: 0;
}

.second-menu ul li:last-child a {
	/*padding: 0;*/
}

.second-menu ul li ul {
	width: 195px;
	position: absolute;
	top: 100%;
	left: 0;
	display:none;
}

.second-menu ul li ul li {
	float: none;
	display: block;
	padding: 0;
}

.second-menu ul li ul li ul {
	position:absolute;
	top:0;
	left:0;
	border-top:1px solid #c7c7c7;
}

.second-menu ul li ul li a {
	padding: 0 5px 0 10px;
	display: block;
	float: none;
}

/*.second-menu ul li ul li:last-child a {
	 }*/

.second-menu ul li.sfHover ul li a {
	 }

.breadcrumbs-with-menu {
	padding: 10px 0 10px 0;
}

.breadcrumbs a:hover,
.breadcrumbs a.trail-end {
	text-decoration: none;
}

.breadcrumbs .sep {
	margin: 0 5px;
}

.breadcrumbs-without-menu {
	margin: 0 0 20px 0;
	padding: 0;
}

.one-column {
	padding: 0 0 5px 0;
}

#container p.summary {
	padding: 0 0 30px 0;
}


.single-column {
	padding: 0 0 45px 0;
}

.single-column .image {
	width: 620px;
	float: left;
	display: inline;
}

.single-column .text {
	width: 300px;
	float: right;
	display: inline;
}

.single-column .text h4 {
	padding: 0 0 10px 0;
}

.article .col {
	width: 460px;
	padding: 0 0 40px 0;
}

.article.widgets-present {
	width: 620px;
}

.article.widgets-present .col {
	width: 300px;
}

.two-column {
	padding: 0 0 10px 0;
}

.two-column .image {
	float: left;
	display: inline;
	width: 140px;
}

.two-column .text {
	width: 300px;
	float: right;
	display: inline;
}

.two-column .text h4 {
	padding: 0 0 10px 0;
}

.three-column {
	width: 960px;
	margin: 0 -10px;
	padding: 0;
	position: relative;
}

.three-column .col {
	width: 300px;
	padding: 0 10px;
	float: left;
	display: inline;
}

.three-column .col .image {
	display: block;
}

.three-column .col .text {
	padding: 5px 15px 0 15px;
	text-align: center;
}

.three-column .col .text h4 {
	padding: 0 0 10px 0;
}

.four-column {
	padding: 0;
	width: 960px;
	margin: 0 -10px;
	position: relative;
}

.four-column .col {
	padding: 0 10px;
	width: 220px;
	float: left;
	display: inline;
}

.four-column .col .image {
	display: block }

.four-column .col .text {
	padding: 5px 5px 0 5px;
	text-align: center;
}

.four-column .col .text h5 {
	padding: 0 0 10px 0;
}

#slider-wrapper {
	padding: 0 0 60px 0;
}

#slider-wrapper .big-slider {
	position: relative;
	width: 940px;
	height: 400px;
	padding: 0;
	display: block;
	margin: 0 0 10px 0;
}

#slider-wrapper .big-slider .slides li {
	display: none;
	position: relative;
}

#slider-wrapper .big-slider .slides li img {
	display: block;
	width: 100%;
}

#slider-wrapper .thumbs-slider {
	width: 640px;
	margin: 0 auto;
	position: relative;
	padding: 0;
	display: block;
}

#slider-wrapper .thumbs-slider .slides li {
	display: none;
	position: relative;
	width: 140px;
	padding: 0 10px;
	cursor: pointer;
}

#slider-wrapper .thumbs-slider .slides li .shadow {
	position: absolute;
	top: 0;
	left: 10px;
	width: 140px;
	height: 100%;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
	display: block;
}

#slider-wrapper .thumbs-slider .slides li img {
	display: block;
}

#slider-wrapper .thumbs-slider .flex-direction-nav li a {
	position: absolute;
	top: 50%;
	margin-top: -10px;
	width: 20px;
	height: 20px;
	display: block;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}

#slider-wrapper .thumbs-slider .flex-direction-nav li a.flex-prev {
	left: -20px;
}

#slider-wrapper .thumbs-slider .flex-direction-nav li a.flex-next {
	right: -20px;
}

.widget .shell {
	padding: 30px 0;
}

.widget h2 {
	padding: 0 0 15px 0;
}

.widget .col {
	
}

.widget .col .image img {
	display: block;
}

.widget .col .text {
	text-align: left;
	padding: 20px 0 0 0;
}

.widget .col .text h3 {
	padding: 0 0 5px 0;
}

.widget-type-1  {
	color:#898989;
	font-style:italic;
}

.widget-type-1 .background-texture {
	background: url(images/texture-stripes-black.png) repeat 0 0;
}

.widget .top-fade {
	background: url(images/fade-top-black.png) repeat-x 0 0;
}

.widget .bottom-fade {
	background-image: url(images/fade-bottom-white.png);
	background-repeat: repeat-x;
	background-position:bottom;
}

.widget-type-1 h3 {
	font-style:normal;
	font-size:21px;
	text-transform:uppercase;
	color:#6f6f6f;
	text-shadow:-1px -1px 0px #f2f2f2;
}

.widget-type-2 {
	color:#6f6f6f;
	font-style:italic;
}

.widget-type-2 .background-texture {
	background: url(images/texture-stripes-black.png) repeat 0 0;
}

.widget-type-2 h3 {
	font-style:normal;
	font-size:21px;
	text-transform:uppercase;
	color:#515151;
	text-shadow:-1px -1px 0px #e0e0e0;
}

.widget-type-3 {
	color:#c4c4c4;
	font-style:italic;
}

.widget-type-3 .background-texture {
	background: url(images/texture-stripes-white.png) repeat 0 0;
}

.widget-type-3 a {
	color:#CCDCEE;
}

.widget-type-3 h3 {
	font-style:normal;
	font-size:21px;
	text-transform:uppercase;
	color:#e3e3e3;
	text-shadow:1px 1px 0px #484848;
}

.widget-type-2 .image {
	padding: 5px;
	width: 290px;
	background: #fbfbfb;
}

.widget-type-2 .text {
	text-align: justify;
}

.widget-type-3 .col .text {
	padding: 0;
	text-align: justify;
}

.footer-line-1 {
	border:0;
	border-top:solid 1px #<?php echo($a2d50); ?>;
}

.footer-line-2 {
	border:0;
	border-top:solid 1px #<?php echo($a3d50); ?>;
}

.footer-line-3 {
	border:0;
	border-top:solid 1px #<?php echo($a4d50); ?>;
}

.post {
	 }

.post h2 {
	padding: 0 0 10px 0;
	margin: 0 0 10px 0;
}

.post h3 {
	padding: 5px 0 19px 0;
}

.post p {
	padding: 0 0 25px 0;
}

#container {
	text-align: justify;
}

#content.left {
	width: 620px;
}

#content .one-column {
	padding: 0 0 60px 0;
}

#content .two-column .col {
	width: 300px;
}

#content .two-column .col h2 {
	padding: 0 0 10px 0;
	margin: 0 0 10px 0;
}

#content .two-column .col p {
	padding: 0 0 25px 0;
}

#sidebar {
	width: 300px;
	margin-top: 80px;
}

#sidebar h3 {
	padding: 0 0 15px 0;
	margin: 0 0 15px 0;
	font-style: normal;
}

#sidebar ul li {
	padding: 0 0 5px 15px;
}

#wp-calendar {
	width:100%;
	text-align:center;
}

#wp-calendar td {
	width:14%;
}

#wp-calendar thead {
	font-size:12px;
	font-weight: bold;
	text-transform:uppercase;
}

#wp-calendar tfoot {
	font-size:12px;
	text-transform:uppercase;
}

.widget-search .search-text {
	display:block;
	border: solid #c7c7c7 1px;
	background-color:#fbfbfb;
	font-size:18px;
	font-weight:normal;
	color:#787878;
	padding:5px;
	width:288px;
}

#footer .shell {
	padding: 30px 0;
}

#footer .background-texture {
	background: url(images/texture-stripes-black.png) repeat 0 0;
}

#footer .fade-top {
	background: url(images/fade-top-black.png) repeat-x 0 0;
}

#footer .shell {
	position: relative;
}

#footer a.logo {
	display: block;
	width: 220px;
	height: 80px;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}

#footer .footer-menu {
	float: right;
	display: inline;
	width: 710px;
	text-align: center;
}

#footer .footer-menu ul {
	display:table;
	width:100%;
}

#footer .footer-menu ul li {
	display: table-cell;
	text-align:center;
}

#footer .copy {
	float:right;
	position: absolute;
	bottom: 30px;
	right: 0;
}

.page-links {
	float:right;
	margin:10px 0;
	clear:both;
}

.page-links span {
	padding:2px 8px;
	margin:0 2px;
}

.pagination {
	float:right;
	margin:10px 0;
}

.pagination a.page-numbers:not(.prev):not(.next) {
	padding: 2px 8px;
	margin:0 2px;
	background-color:#0252aa;
	color:#fbfbfb;
}

.pagination span.current {
	padding: 2px 8px;
	margin:0 2px;
	background-color:#787878;
	color:#fbfbfb;
}