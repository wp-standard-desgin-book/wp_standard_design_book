<?php get_header(); ?>

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<header class="entry-header">
						<h1 class="entry-title"><?php the_archive_title(); ?></h1>
					</header>
					<!--/.entry-header-->

					<section class="archive menus posts">

						<nav class="menu-navs">
							<ul>
								<li><a href="../">ALL</a></li>
								<li><a href="../">アイスドリンク</a></li>
								<li><a href="../">ホットドリンク</a></li>
								<li><a href="../">フード</a></li>
								<li><a href="../">スイーツ</a></li>
							</ul>
						</nav>
						<!--.menu-navs-->

						<div class="entry-content">

							<div class="row">
							<?php
							// ループは通常のアーカイブテンプレートと同じ記述です
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post(); ?>

								<div class="menu-block">

									<div class="menu-thumbnail">
									<?php the_post_thumbnail(); // サムネイル?>
									</div>

									<h2 class="menu-title">
										<?php the_title(); // タイトル ?>
									</h2>

									<div class="menu-desc">
										<?php the_content(); // コンテンツ ?>
									</div>

									<p class="menu-more">
										<a href="<?php the_permalink(); // 詳細ページのリンク先 ?>" class="btn btn-more">詳細を見る</a>
									</p>
								</div>
								<!--▲アイスコーヒー : 終了-->

								<?php
								endwhile;
							else : // 記事が見つからない時の処理 ?>
								<p>メニューが見つかりませんでした。</p>
							<?php
							endif; ?>

							</div>

						</div>
						<!--/.entry-content-->

					</section>
					<!--/.archive-->

					<!--▼ ページネーション : 開始-->
					<?php the_posts_pagination(); ?>
					<!--▲ ページネーション : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>
			</div>

		</div>
		<!--▲メインコンテンツ : 終了-->
<?php get_footer(); ?>

