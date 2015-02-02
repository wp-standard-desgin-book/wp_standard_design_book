<?php get_header(); ?>
		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts">
						<?php if ( have_posts() ) : //もし、記事が1件以上あったら ?>
							<?php while ( have_posts() ) : //記事の表示条件を満たす間は繰り返す
							the_post(); //データ1件分を取り出して渡す ?>
						<!-- ▼ブログ記事 : 開始 -->
						<article <?php post_class(); ?>>
							<header class="page-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!--/.entry-header-->

							<div class="entry-meta">
								<span class="author">投稿者 : <?php the_author(); ?></span>
								<span class="date"><time class="entry-date"><?php the_time( 'Y年n月j日' ); ?></time></span>
								<span class="categories-links"><?php the_category( ',' ); ?></span>
							</div><!--/.entry-meta -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!--/.entry-content-->

							<footer class="entry-footer">
								<span class="comments-link"><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
								<?php the_tags( '<span class="tag-links">', ',', '</span>' ); ?>
							</footer>
						</article>
						<!--▲ブログ記事 : 終了-->
							<?php endwhile; //投稿ループ終了 ?>
						<?php endif; //条件分岐終了 ?>

						<!--▼コメント : 開始-->
						<?php comments_template(); ?>
						<!--▲コメント : 終了-->

						<!--▼ 投稿ナビゲーション : 開始-->
						<?php the_post_navigation(); ?>
						<!--▲ 投稿ナビゲーション : 終了-->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->
<?php get_footer(); ?>
