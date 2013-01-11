<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head <?php language_attributes(); ?>>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php hybrid_document_title(); ?></title>
	<link rel="stylesheet" href="<?php echo (bloginfo('template_directory')); ?>/stylesheets/reset.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo (bloginfo('template_directory')); ?>/stylesheets/style.php" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); // wp_head ?>
    
</head>
		
<body>
	<div id="wrapper">
		<div class="background-texture">
		<div class="fade-bottom">
		<div class="shell">
			
			<!-- Header -->
			<div id="header">
				<div id="logo">
					<a></a>
				</div>
				<!-- Primary Navigation -->
				<?php get_template_part( 'menu', 'primary' ); ?>
				<!-- End Primary Navigation -->
				<div class="cl">&nbsp;</div>
				<?php get_search_form($echo); ?>
			</div>
			<!-- End Header -->

		<!-- Main -->
		<div id="main">
			<!-- Secondary Navigation -->
			<?php get_template_part( 'menu', 'secondary' ); ?>
			<!-- End Secondary Navigation -->
			<!-- Breadcrumbs -->
			<?php get_template_part('breadcrumb'); ?>
			<!-- End Breadcrumbs -->