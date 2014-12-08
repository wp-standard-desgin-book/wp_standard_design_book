<?php
/**
 * 404 テンプレート
 */
get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts">

						<article class="post hentry">

							<header class="entry-header">
								<h1 class="entry-title">
									ページが見つかりませんでした。
								</h1>
							</header>
							<!--/.entry-header-->

							<div class="entry-content">

								<!--▼記事コンテンツ : 開始 -->

								<?php if ( has_post_thumbnail() ) : ?>

								<div class="thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>

								<?php endif; ?>

								<p>大変申し訳ございません。
									<br /> お探しのページは削除されたか、名前が変更されたか、一時的に利用できない可能性があります。
									<br /> アクセスされたURLをご確認いただき、このサイトのトップページから、または上部ナビゲーションメニューからお探しのページへアクセスしてください。
								</p>
								<p><a href="<?php echo site_url( '/' ); ?>">&raquo;トップページへ戻る</a></p>

								<!--▲記事コンテンツ : 終了 -->


							</div>
							<!--/.entry-header-->

						</article>

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>
			</div>

		</div>

<?php get_footer(); ?>
