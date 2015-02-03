
		<!--▼フッター : 開始-->
		<footer id="colophon" class="footer text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/common/logo-footer.png" alt="Ozone Cafe">
					</a>
					<p><?php bloginfo( 'description' ) ?></p>
				</div><!--/.footer-logo-->

				<div class="footer-navigation">
					<?php
					/**
					* フッター
					*/
					wp_nav_menu( array(
						'theme_location' => 'footer',
					) );
					?>
				</div><!--/.footer-navigation-->

				<div class="footer-copyright">
					<p>Copyright &copy; 2015 <?php bloginfo( 'name' ); ?> All Right Reserved.</p>
				</div><!--/.footer-copyright-->

			</div>
		</footer>
		<!--▲フッター : 終了-->
		<?php wp_footer(); ?>
	</body>
</html>
