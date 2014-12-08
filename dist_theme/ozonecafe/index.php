<?php
/**
 * インデックス
 */
get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">

						<header class="entry-header">
							<h1 class="entry-title archive-title">
								<?php the_archive_title(); ?>
							</h1>
						</header>
						<!--/.entry-header-->

						<!-- ▼ブログ記事一覧 : 開始 -->
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();?>


						<!--▼一記事目 : 開始-->
						<article id="post-1" class="post hentry">

							<header class="entry-header">

								<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>

								<div class="entry-meta">

									<span class="date"><time class="entry-date"><?php echo get_the_date( 'Y年m月d日' ) ?></time></span>

									<span class="categories-links info"><?php the_category( ' ' ); ?></span>
								</div>

							</header>
							<!--/.entry-header-->

							<div class="entry-content">
								<div class="thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>

								<?php the_excerpt(); ?>

							</div>
							<!--/.entry-content-->

						</article>
						<!--▲一記事目 : 終了-->

							<?php
							endwhile;
						endif; ?>

						<!--▼ ページネーション : 開始-->
						<nav class="navigation paging-navigation" role="navigation">
							<div class="nav-links">

								<?php if ( get_next_posts_link() ) : ?>
								<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> 古い投稿', 'ozonecafe' ) ); ?></div>
								<?php endif; ?>

								<?php if ( get_previous_posts_link() ) : ?>
								<div class="nav-next"><?php previous_posts_link( __( '新しい投稿 <span class="meta-nav">&rarr;</span>', 'ozonecafe' ) ); ?></div>
								<?php endif; ?>

							</div><!-- .nav-links -->
						</nav><!-- .navigation -->

						<!--▲ ページネーション : 終了-->

						<!-- ▲ブログ記事一覧 : 終了 -->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>
			</div>

		</div>

<?php get_footer(); ?>
