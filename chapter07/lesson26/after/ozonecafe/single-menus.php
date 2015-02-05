<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts"  role="main">
						<?php if ( have_posts() ): ?>
							<?php while ( have_posts() ):
								the_post(); ?>
						<article <?php post_class(); ?>>
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!--/.entry-header-->

							<div class="entry-content">

								<!--▼記事コンテンツ : 開始-->
								<div class="menu-detail">
									<div class="menu-thumbnail">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'medium' ); ?>
										<?php else : //アイキャッチ画像がないとき ?>
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/content/noimage.png" alt="" class="img-responsive">
										<?php endif; ?>
									</div>

									<!--▼メニューコンテンツ : 開始-->
									<div class="menu-content">
										<?php the_content(); ?>
										<h4>価格</h4>
										<p>450円 (税別)</p>
									</div>
									<!--▲メニューコンテンツ : 終了-->

								</div><!--/.menu-detail-->

								<!--▲記事コンテンツ : 終了-->

							</div><!--/.entry-content-->

						</article><!--/.hentry-->

					<?php endwhile; ?>
					<?php endif; ?>
					</div>
					<!--▲記事コンテンツエリア : 終了-->

					<p class="text-left">
						<a href="<?php echo esc_url( home_url( '/menus/' ) ); ?>">← メニュー一覧へ戻る</a>
					</p>
				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->

<?php get_footer(); ?>
