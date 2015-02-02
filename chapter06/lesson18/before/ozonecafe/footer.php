
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
					<ul>
						<li><a href="../">トップページ</a></li>
						<li><a href="../shop/index.html">店舗案内</a></li>
						<li><a href="../menus/index.html">メニュー</a></li>
						<li><a href="../blog/index.html">ブログ</a></li>
						<li><a href="../recruit/index.html">スタッフ募集</a></li>
						<li><a href="../recruit/form.html">求人応募</a></li>
						<li><a href="../sitemap.html">サイトマップ</a></li>
					</ul>
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
