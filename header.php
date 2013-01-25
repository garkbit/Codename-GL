<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head <?php language_attributes(); ?>>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php hybrid_document_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
	<?php get_template_part( 'dynamic-css' ); // Loads the dynamic CSS. ?>
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
					<?php $header_style = get_theme_mod('header_style', 'logo'); ?>
					<?php if('logo' == $header_style): ?>
						<?php echo('<div id="header">'); ?>
							<?php echo('<a href="' . home_url() . '">'); ?>
								<?php echo('<img class="logo" src="' . get_theme_mod('header_logo') . '" />'); ?>
							<?php echo('</a>'); ?>
							<?php get_template_part( 'menu', 'primary' ); ?>
							<?php echo('<div class="cl">&nbsp;</div>'); ?>
							<?php get_search_form($echo); ?>
						<?php echo('</div>'); ?>
					<? else: ?>
						<?php echo('<div id="header" class="header-c">'); ?>
							<?php echo('<img src="' . get_theme_mod('header_banner') . '" alt="Image" />'); ?>
							<?php get_template_part('menu', 'primary'); ?>
							<?php echo('<div class="cl">&nbsp;</div>'); ?>
							<?php get_search_form($echo); ?>
						<?php echo('</div><!-- .header-c -->'); ?>
					<?php endif; ?>
					<!-- End Header -->

				<!-- Main -->
				<div id="main">
					<!-- Secondary Navigation -->
					<?php get_template_part( 'menu', 'secondary' ); ?>
					<!-- End Secondary Navigation -->
					<!-- Breadcrumbs -->
					<?php get_template_part('breadcrumb'); ?>
					<!-- End Breadcrumbs -->