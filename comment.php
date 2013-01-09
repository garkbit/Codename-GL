<?php
/**
 * Comment Template
 *
 * The comment template displays an individual comment. This can be overwritten by templates specific
 * to the comment type (comment.php, comment-{$comment_type}.php, comment-pingback.php, 
 * comment-trackback.php) in a child theme.
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

<li id="comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class();?>">
	<div class="comment-wrap">
		<?php echo hybrid_avatar(); ?>
		<div class="comment-content-wrap">
			<div class="comment-content comment-text">
				<?php echo apply_atomic_shortcode( 'comment_meta', '<div class="comment-meta">[comment-author] on [comment-published] said: [comment-permalink] [comment-edit-link]</div>' ); ?>
				<?php if('0' == $comment->comment_approved) { ?>
					<?php echo apply_atomic_shortcode( 'comment_moderation', '<p class="alert moderation">' . __( 'Your comment is awaiting moderation.', 'unique' ) . '</p>' ); ?>
				<?php } ?>
				<?php comment_text( $comment->comment_ID ); ?>
				<?php echo apply_atomic_shortcode('comment_reply', '[comment-reply-link]'); ?>
			</div>
		</div>
		<div class="cl"></div>
	</div>
<li>