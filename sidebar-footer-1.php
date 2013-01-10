<?php
/**
 * Footer 1 Sidebar Template
 *
 * Displays widgets for the Footer 1 dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package Codename GL
 * @subpackage Template
 * @since 0.1.0
 * @author Aaron Nelson <aaron@gorillaleague.com>
 * @copyright Copyright (c) 2012, Aaron Nelson
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( is_active_sidebar( 'footer-1' ) ) : ?>

	<div class="widget widget-type-1">
		<div class="shell">
			<div class="four-column">
				<?php dynamic_sidebar( 'footer-1' ); ?>
				<div class="cl"></div>
			</div><!-- .four-column -->
		</div><!-- .shell -->
	</div><!-- .widget-type-1 -->

<?php endif; ?>