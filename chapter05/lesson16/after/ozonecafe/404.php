<?php get_header(); ?>
		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">
						<header class="page-header">
							<h1 class="archive-title">404 Not Found</h1>
						</header><!--/.page-header-->

						<article>
							<div class="entry-content">
								<h2>ページが見つかりません</h2>
								<p>大変申し訳ございません。<br/>
									お探しのページは削除されたか、名前が変更されたか、一時的に利用できない可能性があります。<br/>
									アクセスされたURLをご確認いただき、このサイトのトップページから、または上部ナビゲーションメニューからお探しのページへアクセスしてください。
								</p>
								<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">&raquo;トップページへ戻る</a></p>
							</div><!--/.entry-content-->

						</article>
					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->

<?php get_footer(); ?>
