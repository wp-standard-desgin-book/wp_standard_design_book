<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts" role="main">

						<article class="post hentry">

							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); // タイトル ?></h1>
							</header>
							<!--/.entry-header-->

							<div class="entry-content">

								<!--▼記事コンテンツ : 開始-->
								<div class="menu-detail">
									<div class="menu-thumbnail">
										<?php the_post_thumbnail(); // サムネイル画像 ?>
									</div>
									<!--▼メニューコンテンツ : 開始-->
									<div class="menu-content">
										<?php the_content(); // コンテンツ ?>
										<h4>価格</h4>
										<p>450円 (税別)</p>
									</div>
									<!--▲メニューコンテンツ : 終了-->

								</div>
								<!--/.menu-detail-->

								<!--▲記事コンテンツ : 終了-->

							</div>
							<!--/.entry-content-->

						</article>
						<!--/.hentry-->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

					<p class="text-left">
						<a href="<?php echo esc_url( site_url( '/menus/' ) ) ?>">← メニュー一覧へ戻る</a>
					</p>

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>
			</div>

		</div>
		<!--▲メインコンテンツ : 終了-->
<?php get_footer(); ?>
