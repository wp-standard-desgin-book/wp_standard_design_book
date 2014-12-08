<?php
/**
 * メニュー詳細ページテンプレート
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

								<!--▼記事コンテンツ : 開始-->
								<div class="menu-detail">

									<div class="menu-thumbnail">
										<?php the_post_thumbnail(); ?>
									</div>

									<div class="menu-content">
										<?php the_content(); ?>
									</div>
								</div>

								<!--▲記事コンテンツ : 終了-->

							</div>
							<!--/.entry-header-->

						</article>

					</div>
					<!--▲記事コンテンツエリア : 終了-->

					<!--▼ 投稿ナビゲーション : 開始-->
					<nav class="navigation post-navigation" role="navigation">
						<div class="nav-links">

							<?php if ( get_next_posts_link() ) : ?>
							<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> 古い投稿', 'ozonecafe' ) ); ?></div>
							<?php endif; ?>

							<?php if ( get_previous_posts_link() ) : ?>
							<div class="nav-next"><?php previous_posts_link( __( '新しい投稿 <span class="meta-nav">&rarr;</span>', 'ozonecafe' ) ); ?></div>
							<?php endif; ?>

						</div><!-- .nav-links -->

					</nav>
					<!--▲ 投稿ナビゲーション : 終了-->
					<?php
					endwhile;
				endif; ?>
				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>
			</div>

		</div>

<?php get_footer(); ?>
