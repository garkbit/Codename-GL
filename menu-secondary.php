<?php if ( has_nav_menu( 'secondary' ) ) : ?>

	<div id="" class="second-menu">

		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'menu', 'menu_class' => 'sf-menu', 'menu_id' => 'menu-secondary-items', 'fallback_cb' => '' ) ); ?>
	
		<div class="cl">&nbsp;</div>
	</div>

<?php endif; ?>