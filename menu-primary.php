<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<?php $header_style = get_theme_mod('header_style', 'logo'); ?>
	<?php if('logo' == $header_style): ?>

		<?php echo('<div class="navigation navigation-type-2">'); ?>

			<?php wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container_class' => 'menu', 
				'menu_class' => 'sf-menu', 
				'menu_id' => 'menu-primary-items', 
				'fallback_cb' => '',
				'walker' => new Child_Wrap(),
				'items_wrap' => '<ul id="%1$s" class="%2$s"><div class = "background-texture">%3$s<div class="cl"></div></div></ul>',
				'before' => '<div class="fade-one"><div class="fade-two">',
				'after' => '<div class="cl"></div></div></div>') ); ?>

		<?php echo('</div>'); ?>
	
	<?php else: ?>
	
		<?php echo('<div class="navigation navigation-wide">'); ?>

			<?php wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container_class' => 'menu', 
				'menu_class' => 'sf-menu', 
				'menu_id' => 'menu-primary-items', 
				'fallback_cb' => '',
				'walker' => new Child_Wrap(),
				'items_wrap' => '<ul id="%1$s" class="%2$s"><div class = "background-texture">%3$s<div class="cl"></div></div></ul>',
				'before' => '<div class="fade-one"><div class="fade-two">',
				'after' => '<div class="cl"></div></div></div>') ); ?>

		<?php echo('</div>'); ?>
	
	<?php endif; ?>

<?php endif; ?>