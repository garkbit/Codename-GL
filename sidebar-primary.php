<?php
/**
 * Primary Sidebar Template
 *
 * Displays widgets for the Primary dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package Codename GL
 * @subpackage Template
 * @since 0.1.0
 * @author Aaron Nelson <aaron@gorillaleague.com>
 * @copyright Copyright (c) 2012, Aaron Nelson
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( is_active_sidebar( 'primary' ) ) : ?>

	<div id="sidebar" class="right">
		
		<?php dynamic_sidebar( 'primary' ); ?>
		
	</div>

<?php endif; ?>