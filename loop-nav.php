	<?php if ( is_attachment() ) : ?>

		<div class="loop-nav">
			<?php previous_post_link( '%link', '<span class="previous">' . __( '<span class="meta-nav">&larr;</span> Return to entry', 'unique' ) . '</span>' ); ?>
		</div><!-- .loop-nav -->

	<?php elseif ( is_singular( 'post' ) ) : ?>

		<div class="loop-nav">
			<?php previous_post_link( '%link', '<span class="previous">' . __( '<span class="meta-nav"><< </span> %title', 'unique' ) . '</span>' ); ?>
			<?php next_post_link( '%link', '<span class="next">' . __( '%title <span class="meta-nav"> >></span>', 'unique' ) . '</span>' ); ?>
			<div class="cl"></div>
		</div><!-- .loop-nav -->

	<?php elseif ( !is_singular() && current_theme_supports( 'loop-pagination' ) ) : loop_pagination( array( 'prev_text' => __( '<span class="meta-nav"><< </span> Previous', 'unique' ), 'next_text' => __( 'Next <span class="meta-nav"> >></span>', 'unique' ), 'after' => __('</div><div class="cl"></div>') ) ); ?>

	<?php elseif ( !is_singular() && $nav = get_posts_nav_link( array( 'sep' => '', 'prelabel' => '<span class="previous">' . __( '<span class="meta-nav">&larr;</span> Previous', 'unique' ) . '</span>', 'nxtlabel' => '<span class="next">' . __( 'Next &rarr;', 'unique' ) . '</span>' ) ) ) : ?>

		<div class="loop-nav">
			<?php echo $nav; ?>
		</div><!-- .loop-nav -->

	<?php endif; ?>