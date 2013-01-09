<?php
/**
 * Comments Template
 *
 * Lists comments and calls the comment form.  Individual comments have their own templates.  The 
 * hierarchy for these templates is $comment_type.php, comment.php.
 *
 * @package Codename GL
 * @subpackage Template
 * @since 0.1.0
 * @author Aaron Nelson <aaron@gorillaleague.com>
 * @copyright Copyright (c) 2012, Aaron Nelson
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* If a post password is required or no comments are given and comments/pings are closed, return. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<div id="comments-template">
	<div id="comments-wrap">
		<div id="comments">
			<?php if(have_comments()){ ?>
				<div class="comments-nav">
					<span class="comments-number"><strong><?php comments_number( __( 'No Comments', 'unique' ), __( 'One Comment', 'unique' ), __( '% Comments', 'unique' ) ); ?></strong></span>
					<?php if (get_option('page_comments')){ ?>
						<?php echo ('<span class="next-link">'); ?>
							<?php next_comments_link( __( 'Next >>', 'unique' ) ); ?>
						<?php echo ('</span>'); ?>
						<?php echo ('<span class="page-numbers">'); ?>
							<?php printf( __( 'Page %1$s of %2$s', 'unique' ), ( get_query_var( 'cpage' ) ? absint( get_query_var( 'cpage' ) ) : 1 ), get_comment_pages_count() ); ?>
						<?php echo ('</span>'); ?>
						<?php echo ('<span class="prev-link">'); ?>
							<?php previous_comments_link( __( '<< Previous', 'unique' ) ) ?>
						<?php echo ('</span>'); ?>
						<?php echo ('<div class="cl"></div>'); ?>
					<?php } ?>
				</div>
				<ol class="comment-list">
					<?php wp_list_comments(hybrid_list_comments_args()); ?>
				</ol>
			<?php } ?>
			<?php if(pings_open() && !comments_open()) { ?>
				<p class="comments-closed pings-open">
					<?php printf( __( 'Comments are closed, but <a href="%s" title="Trackback URL for this post">trackbacks</a> and pingbacks are open.', 'unique' ), esc_url( get_trackback_url() ) ); ?>
				</p>
			<?php } elseif(!comments_open()) { ?>
				<p class="comments-closed">
					<?php _e( 'Comments are closed.', 'unique' ); ?>
				</p>
			<?php } ?>
		</div>
		<?php comment_form(); // Loads the comment form. ?>
	</div>
</div>