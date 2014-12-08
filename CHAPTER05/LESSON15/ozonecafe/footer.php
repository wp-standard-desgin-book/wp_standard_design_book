		<!--▼フッター : 開始-->
		<footer id="colophon" class="footer text-center">

			<div class="container">

				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo-footer.png" alt="Ozone Cafe">
					</a>
					<p>"一杯"に込める思い。Ozone Cafe</p>
				</div>
				<!--/.footer-logo-->

				<div class="footer-navigation">
					<ul>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">店舗案内</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/menus/' ) ); ?>">メニュー</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">スタッフ募集</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/recruit/form/' ) ); ?>">求人応募</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">サイトマップ</a>
						</li>
					</ul>

				</div>
				<!--/.footer-navigation-->

				<div class="footer-copyright">
					<p>copyright © 2014 <?php bloginfo( 'name' ); ?> All Right Reserved.</p>
				</div>

			</div>

		</footer>
		<!--▲フッター : 終了-->
	<?php wp_footer(); ?>

	</body>

</html>
