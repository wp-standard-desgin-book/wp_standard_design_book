<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">

						<header class="page-header">
							<h1 class="archive-title"><?php the_archive_title(); ?></h1>
						</header><!--/.page-header-->

						<!-- ▼ブログ記事一覧 : 開始 -->
						<?php if ( have_posts() ) : //もし、記事が1件以上あったら ?>
							<?php while ( have_posts() ) : //記事がある間は繰り返す
							the_post(); //次の記事のデータをセットする ?>

						<!--▼一記事目 : 開始-->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<h1 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<div class="entry-meta">
									<span class="date"><time class="entry-date"><?php the_time( 'Y年n月j日' ) ?></time></span>
									<span class="categories-links info"><a href="#" rel="category"><?php the_category( ',' ); ?></a></span>
								</div>
							</header><!--/.entry-header-->

							<div class="entry-content">
								<?php the_content( '&raquo;詳しく見る' ); ?>
							</div><!--/.entry-content-->

							<footer class="entry-footer">
								<span class="comments-link"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
								<?php the_tags( '<span class="tag-links">', ',', '</span>' ); ?>
							</footer><!--/.entry-footer-->

						</article>
						<!--▲一記事目 : 終了-->

						<!--▲1記事目 : 終了-->
						<?php endwhile; //投稿ループ終了 ?>

						<!-- ▲ブログ記事一覧 : 終了 -->

						<?php the_posts_pagination(); ?>

						<?php else : //もし、表示すべき記事がなかったら ?>
							<p>まだ記事はありません。</p>
						<?php endif; //条件分岐終了 ?>

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->
				<?php get_sidebar(); ?>
			</div>
		</div>
		<!--▲メインコンテンツ : 終了-->
<?php get_footer(); ?>
