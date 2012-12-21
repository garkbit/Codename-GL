<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<div class="navigation navigation-type-2">

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu', 'menu_class' => 'sf-menu', 'menu_id' => 'menu-primary-items', 'fallback_cb' => '' ) ); ?>

	</div>

<?php endif; ?>