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
						<article <?php post_class() ?>>
							<header class="page-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!--/.page-header-->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!--/.entry-content-->

						</article>
						<?php endwhile; //投稿ループ終了 ?>
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
