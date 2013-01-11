			<?php do_atomic( 'after_container' ); // hybrid_after_container ?>
			</div>
			<!-- End Main -->
		</div>
		<!-- End Shell -->
		<?php if(is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )){
			if(is_active_sidebar( 'footer-1')){
				echo('<hr class="footer-line-1" />');
			} elseif(is_active_sidebar( 'footer-2')) {
				echo('<hr class="footer-line-2" />');
			} elseif(is_active_sidebar( 'footer-3')) {
				echo('<hr class="footer-line-3" />');
			}
		}
		get_sidebar('footer-1');
		if(is_active_sidebar( 'footer-1' )){
			if(is_active_sidebar( 'footer-2' )) {
				echo('<hr class="footer-line-2" />');
			} elseif(is_active_sidebar( 'footer-3' )) {
				echo('<hr class="footer-line-3" />');
			} else {
				echo('<hr class="footer-line-1" />');
			}
		}
		get_sidebar('footer-2');
		if(is_active_sidebar( 'footer-2' )){
			if(is_active_sidebar( 'footer-3' )) {
				echo('<hr class="footer-line-3" />');
			} else {
				echo('<hr class="footer-line-2" />');
			}
		}
		get_sidebar('footer-3');
		if(is_active_sidebar( 'footer-3' )){
			echo('<hr class="footer-line-3" />');
		} ?>
		<div class="cl">&nbsp;</div>
	</div><!-- #wrapper -->
		</div><!-- .fade-bottom -->
		</div><!-- .background-texture -->
	<!-- End Wrapper -->
	<!-- Footer -->
	<?php do_atomic( 'before_footer' ); // hybrid_before_footer ?>
	<div id="footer">
		<div class="background-texture">
			<div class="fade-top">
				<!-- Shell -->
				<div class="shell">
					<a href="#" class="logo left">Logo</a>
					<?php if ( has_nav_menu( 'subsidiary' ) ) : ?>
						<?php wp_nav_menu( array( 'depth' => '1', 'theme_location' => 'subsidiary', 'container_class' => 'footer-menu menu', 'menu_class' => '', 'menu_id' => 'menu-subsidiary-items', 'fallback_cb' => '' ) ); ?>
					<?php endif; ?>
					<span class="copy">&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. All Rights Reserved.</span>
					<?php do_atomic( 'footer' ); // hybrid_footer ?>
					<div class="cl"></div>
				</div><!-- .shell -->
			</div><!-- .fade-top -->
		</div><!-- .background-texture -->
	</div><!-- #footer -->
	<?php do_atomic( 'after_footer' ); // hybrid_after_footer ?>
	<?php wp_footer(); // wp_footer ?>
</body>
</html>