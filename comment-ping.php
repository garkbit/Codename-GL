<?php
/**
 * Pingback Comment Template
 *
 * The pingback comment template displays an individual pingback comment.
 *
 * @package Codename GL
 * @subpackage Template
 * @since 0.1.0
 * @author Aaron Nelson <aaron@gorillaleague.com>
 * @copyright Copyright (c) 2012, Aaron Nelson
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

	global $post, $comment;
?>

<li id="ping-<?php comment_ID(); ?>" class="<?php hybrid_comment_class();?>">
	<div class="ping-wrap">
		<div class="ping-content-wrap">
			<div class="ping-content ping-text">
				<?php echo apply_atomic_shortcode( 'ping_meta', '<div class="ping-meta">[comment-published] [comment-permalink] [comment-edit-link]</div>' ); ?>
				<div class="ping-source"><?php echo(do_shortcode('[comment-author]')); ?></div>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<li>