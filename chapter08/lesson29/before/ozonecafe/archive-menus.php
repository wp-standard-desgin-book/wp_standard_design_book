<?php get_header(); ?>
		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">
					<header class="page-header">
						<h1 class="archive-title"><?php the_archive_title(); ?></h1>
					</header><!--/.page-header-->

					<section class="archive menus posts">
						<nav class="menu-navs">
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/menus/' ) );?>">ALL</a></li>
								<?php
									// メニューカテゴリーのリストを出力
									$args = array(
										'taxonomy' => 'menucat', //menucatタクソノミーを指定
										'title_li' => '', //リストの見出しは出力しない
									);
									wp_list_categories( $args );
								?>
							</ul>
						</nav><!--/.menu-navs-->

						<?php if ( have_posts() ) : ?>
						<div class="entry-content">
							<div class="row">
							<?php while ( have_posts() ) :
								the_post(); ?>
								<!--▼メニュー1 : 開始-->
								<div class="menu-block">
									<div class="menu-thumbnail">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail(); ?>
										<?php else : // アイキャッチ画像が無い時 ?>
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/content/noimage.png" alt="" class="img-responsive">
										<?php endif; ?>
									</div>
									<h2 class="menu-title"><?php the_title(); ?></h2>
									<div class="menu-desc"><?php the_excerpt(); ?></div>
									<p class="menu-more"><a href="<?php the_permalink(); ?>" class="btn btn-more">詳細を見る</a></p>
								</div>
								<!--▲メニュー1 : 終了-->

							<?php endwhile; ?>

							</div>
						</div><!--/.entry-content-->

						<?php the_posts_pagination(); ?>

					<?php else : ?>

					<p>このカテゴリーのメニューはありません。</p>

				<?php endif; ?>

					</section><!--/.archive-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->

<?php get_footer(); ?>
