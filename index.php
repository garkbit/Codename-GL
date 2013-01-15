<?php 
/**
 * Index Template
 *
 * The index template is the "fallback" template. What this means is that it will be used if a more specific 
 * template is not found to display the content of a page.
 *
 * @package Hybrid
 * @subpackage Template
 * @link http://themehybrid.com/themes/hybrid/template-hierarchy
*/

get_header(); // Loads the header.php template. ?>

				<div id="container">
					<div id="content" <?php if(is_active_sidebar('Primary')){echo('class="left"');} ?>>
						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>
								
								<?php if (is_singular()) { ?>
								
									<?php comments_template('/comments.php', true); ?>
								
								<?php } ?>

							<?php endwhile; ?>

						<?php else : ?>

							<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

						<?php endif; ?>
						
						<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>
					</div><!-- Content -->
					<?php get_sidebar('primary'); ?>
					<div class="cl"></div>
				</div><!-- Container -->
				

<?php get_footer(); // Loads the footer.php template. ?>