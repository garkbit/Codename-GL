<?php
/**
 * Chat Content Template
 *
 * Template used to show post content when a more specific template cannot be found.
 *
 * @package Codename GL
 * @subpackage Template
 * @since 0.1.0
 * @author Aaron Nelson <aaron@gorillaleague.com>
 * @copyright Copyright (c) 2012, Aaron Nelson
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

do_atomic( 'before_entry' ); // unique_before_entry ?>

					<?php if ( is_singular() && is_main_query() ) { ?>
					
						<!-- Article -->
						<div class="article">
							<!-- Single Column -->
							<div class="article-header">
								<?php echo apply_atomic_shortcode( 'entry_title', the_title( '<h1 class="entry-title">', '</h1>', false ) ); ?>
								<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( '[post-format-link] published by [entry-author] on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'unique' ) . '</div>' ); ?>
							</div>
							
							<?php if ( has_excerpt() ) { ?>
								<div class="article-summary">
									<?php the_excerpt(); ?>
								</div>
							<?php } ?>
							
							<div class="article-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links">Pages:', 'after' => '</div><div class="cl"></div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
							</div>
							
							<div class="article-footer">
								<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="<br />Tagged "]', 'unique' ) . '</div>' ); ?>
							</div>
							<!-- End Single Column -->
						</div>
						<!-- End Article -->
						
					<?php } else { ?>
					
						<!-- Article -->
						<div class="article list">
							<!-- Single Column -->
							<div class="article-header">
								<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
								<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( '[post-format-link] published by [entry-author] on [entry-published] [entry-comments-link before=" | "] [entry-permalink before="| "] [entry-edit-link before=" | "]', 'unique' ) . '</div>' ); ?>
							</div>
							
							<?php if ( has_excerpt() ) { ?>
							
								<div class="article-summary">
									<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail', 'image_class' => 'alignleft' ) ); ?>
									<?php the_excerpt(); ?>
								</div>
							
							<?php }  else { ?>
							
								<div class="article-summary">
									<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail', 'image_class' => 'alignleft' ) ); ?>
									<?php the_content( __( 'Read more &rarr;', 'unique' ) ); ?>
								</div>
							
							<?php }  ?>
							
							<div class="article-footer">
								<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="<br />Tagged "]', 'unique' ) . '</div>' ); ?>
							</div>
							<!-- End Single Column -->
						</div>
						<!-- End Article -->
					
					<?php } ?>

<?php do_atomic( 'after_entry' ); // unique_after_entry ?>