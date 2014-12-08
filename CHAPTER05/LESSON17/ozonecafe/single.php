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
						<article <?php post_class(); ?>>

							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header>
							<!--/.entry-header-->

							<div class="entry-meta">
								<span class="author">投稿者 : <?php the_author(); ?></span>
								<span class="date"><time class="entry-date"><?php the_time(); ?></time></span>
								<span class="categories-links info"><?php the_category( ',' ) ?></span>
							</div>
							<!--./entry-meta -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div>
							<!--/.entry-content-->

							<footer class="entry-footer">
											<span class="comments-link"><a href="<?php comment_link(); ?>"><?php comments_number(); ?>件のコメント</a></span>
											<span class="tag-links"><?php the_tags( ',' ); ?></span>
							</footer>

						</article>

						<?php comments_template(); ?>

						<!--▼ 投稿ナビゲーション : 開始-->
						<nav class="navigation post-navigation" role="navigation">

							<div class="nav-links">
								<?php previous_post_link( '<span class="pageprev">← %link</span>', '前の記事へ' ); ?>
								<?php next_post_link( '<span class="pagenext">%link →</span>', '次の記事へ' ); ?></nav>
							</div>
							<!-- .nav-links -->

						</nav>
						<!--▲ 投稿ナビゲーション : 終了-->

						<?php endwhile; //投稿ループ終了 ?>
						<?php endif; //条件分岐終了 ?>

					</div>

					<!--▲記事コンテンツエリア : 終了-->
					<?php get_sidebar(); ?>

				</div>
				<!-- ▲メインカラム : 終了-->


			</div>

		</div>
		<!--▲メインコンテンツ : 終了-->

<?php get_footer(); ?>
