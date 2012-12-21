			<?php do_atomic( 'after_container' ); // hybrid_after_container ?>
			</div>
			<!-- End Main -->

		</div>
		<!-- End Shell -->
		<div class="cl" id="footer-push">&nbsp;</div>
	</div>
	<!-- End Wrapper -->
	<!-- Footer -->
	<?php do_atomic( 'before_footer' ); // hybrid_before_footer ?>
	<div id="footer">
		<!-- Shell -->
		<div class="shell">
			<a href="#" class="logo">Logo</a>
			<?php if ( has_nav_menu( 'subsidiary' ) ) : ?>
				<?php wp_nav_menu( array( 'theme_location' => 'subsidiary', 'container_class' => 'menu', 'menu_class' => '', 'menu_id' => 'menu-subsidiary-items', 'fallback_cb' => '' ) ); ?>
            <?php endif; ?>
			<span class="copy">&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. All Rights Reserved.</span>
			<?php do_atomic( 'footer' ); // hybrid_footer ?>
		</div>
		<!-- End Shell -->
	</div>
	<!-- End Footer -->
	<?php do_atomic( 'after_footer' ); // hybrid_after_footer ?>
	<?php wp_footer(); // wp_footer ?>
</body>
</html>