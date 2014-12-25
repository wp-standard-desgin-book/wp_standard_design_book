<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">
			<?php the_archive_title() ?>
				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">

						<header class="entry-header">
							<h1 class="entry-title archive-title">
								ブログ記事一覧
							</h1>

						</header>
						<!--/.entry-header-->

						<!-- ▼ブログ記事一覧 : 開始 -->

						<?php if ( have_posts() ) : //もし、記事が1件以上あったら
							while ( have_posts() ) : //記事の表示条件を満たす間は繰り返す
								the_post(); //データ1件分を取り出して渡す ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="entry-header">
										<h1 class="entry-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h1>
										<div class="entry-meta">
											<span class="date">
												<time class="entry-date"><?php the_time( 'Y年n月j日' ); ?></time>
											</span>
											<span class="categories-links info">
												<?php the_category( ',' ); ?>
											</span>
										</div>
									</header>
									<div class="entry-content">
										<?php if ( has_post_thumbnail() ): ?>
											<div class="thumbnail">
												<?php the_post_thumbnail( 'medium' ); ?>
											</div>
										<?php endif; ?>

										<?php the_content( '&raquo;詳しく見る' ); ?>
									</div>
								</article>

						<?php endwhile; //投稿ループ終了 ?>
						<?php else : //もし、表示すべき記事がなかったら ?>
							<p>まだ記事はありません。</p>
						<?php endif; //条件分岐終了 ?>

						<!--▼ ページネーション : 開始-->
						<nav class="navigation paging-navigation" role="navigation">
							<div class="nav-links">
								<div class="nav-previous">
									<?php previous_posts_link( '←前のページへ' ); ?>
								</div>
								<div class="nav-next">
									<?php next_posts_link( '次のページへ→' ); ?>
								</div>
							</div>
						</nav>

						<!--▲ ページネーション : 終了-->

						<!-- ▲ブログ記事一覧 : 終了 -->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->
				<?php get_sidebar(); ?>
			</div>

		</div>
		<!--▲メインコンテンツ : 終了-->
<?php get_footer(); ?>
