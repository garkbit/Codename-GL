			<?php if ( has_nav_menu( 'secondary' ) ) : ?>
			
				<div class="breadcrumbs-with-menu">
				<?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(array(
					'before' => false,
					'separator' => '&raquo;'
				)); ?>
				</div>

			<?php else : ?>
			
				<div class="breadcrumbs-without-menu">
				<?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(array(
					'before' => false,
					'separator' => '&raquo;'
				)); ?>
				</div>
				
			<?php endif; ?>