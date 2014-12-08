<?php
/**
 * 固定ページテンプレート
 */
get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();?>
					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts">

						<article class="post hentry">

							<header class="entry-header">
								<h1 class="entry-title">
									<?php the_title(); ?>
								</h1>
							</header>
							<!--/.entry-header-->

							<div class="entry-content">

								<!--▼記事コンテンツ : 開始 -->

								<div class="thumbnail">
									<?php the_post_thumbnail() ?>
								</div>

								<?php the_content(); ?>

								<!--▲記事コンテンツ : 終了 -->


							</div>
							<!--/.entry-header-->

						</article>

					</div>
					<!--▲記事コンテンツエリア : 終了-->

					<?php
					endwhile;
				endif; ?>
				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>
			</div>

		</div>

<?php get_footer(); ?>
