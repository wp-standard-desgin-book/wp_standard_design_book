<?php
/**
 * メニューカテゴリーアーカイブ
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

						<nav class="menu-navs">
							<ul>
								<?php
								/**
								 * 全てのメニュー一覧表示へのリンク
								 */
								 ?>
								<li><a href="<?php echo site_url( '/menus/' ) ?>">ALL</a></li>
								<?php
								/**
								 * メニューカテゴリーの一覧を表示
								 * @var $menu_taxonomy_list_args : メニューカテゴリーを表示するための設定
								 */
									$menu_taxonomy_list_args = array(
										'style'              => 'list',
										'hide_empty'         => false,
										'title_li'           => '',
										'echo'               => true,
										'taxonomy'           => 'menucat',
									);
									wp_list_categories( $menu_taxonomy_list_args );
								?>
							</ul>

						</nav>
						<!--.menu-navs-->

						<!-- ▼ブログ記事一覧 : 開始 -->

						<div class="row">
							<?php
							/**
							 * 記事一覧ループ : 開始
							 */
							if ( have_posts() ) :
								// hove_posts() で取得した記事数分繰り返す
								while ( have_posts() ) :
									// 投稿データをセット
									the_post(); ?>

									<!--▼アイス・カフェオレ : 開始-->
									<div class="menu-block">
										<div class="menu-thumbnail">
											<?php the_post_thumbnail(); ?>
										</div>

										<h2 class="menu-title">
											<?php the_title(); ?>
										</h2>

										<p class="menu-desc">
											<?php the_excerpt(); ?>
										</p>

										<p class="menu-more">
											<a href="<?php the_permalink(); ?>" class="btn btn-more">詳細を見る</a>
										</p>

									</div>
									<!--▲アイス・カフェオレ : 終了-->

								<?php
								endwhile;
							endif;
							/**
							 * 記事一覧ループ : 終了
							 */
							?>
						</div>

						<!--▼ ページネーション : 開始-->
						<nav class="navigation paging-navigation" role="navigation">
							<div class="nav-links">

								<?php if ( get_next_posts_link() ) : ?>
								<div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> 古い投稿' ); ?></div>
								<?php endif; ?>

								<?php if ( get_previous_posts_link() ) : ?>
								<div class="nav-next"><?php previous_posts_link( '新しい投稿 <span class="meta-nav">&rarr;</span>' ); ?></div>
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
