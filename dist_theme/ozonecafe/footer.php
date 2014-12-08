<?php
/**
 * フッター
 */
 ?>
		<!-- フッター -->
		<footer id="colophon" class="footer text-center">

			<div class="container">

				<div class="footer-logo">
					<a href="<?php echo site_url( '/' ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-footer.png" alt="OzoneCafe">
					</a>
					<p>"一杯"に込める思い。OzoneCafe</p>
				</div>

				<div class="footer-navigation">
					<?php
					/**
					 * グローバルナビゲーション
					 */
						wp_nav_menu( array(
							'theme_location' => 'footer',
						) );
					?>
				</div>

				<div class="footer-copyright">
					<p>copyright © <?php echo date( 'Y' ) ?> Ozone Cafe All Right Reserved.</p>
				</div>

			</div>
			<!-- /フッターここまで -->
		</footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<?php
		wp_footer(); ?>

	</body>

</html>
