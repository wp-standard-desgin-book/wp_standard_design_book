<?php
/**
 *  ブログ階層トップページ : テンプレート
 */
get_header(); ?>

		<!--▼トップページ メインビジュアル : 開始-->
		<div class="visual">
			<img src="<?php echo get_template_directory_uri(); ?>/images/main-visual.png" alt="いっぱいに込める思い。OzoneCafe">
			<div class="container">
				<h1 class="site-desctiption">
					<?php bloginfo( 'description' ) ?>
				</h1>
			</div>
		</div>
		<!--▲トップページ メインビジュアル : 終了-->

		<!--▼メインコンテンツ 開始-->
		<div id="main" class="l-one-column clearfix">

			<div class="container">

				<div class="l-main" role="main">

					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();?>
							<?php the_title(); ?>
							<?php the_content(); ?>
						<?php
						endwhile;
					endif; ?>

					<section class="home posts">

						<div class="home-banner">
							<ul>
								<li>
									<a href="<?php echo site_url( '/menus/' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/home/home-banner-menu.png" alt="メニュー">
									</a>
								</li>
								<li>
									<a href="<?php echo site_url( '/shop/' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/home/home-banner-access.png" alt="アクセス">
									</a>
								</li>
								<li>
									<a href="<?php echo site_url( '/recruit/' ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/home/home-banner-recruit.png" alt="スタッフ募集">
									</a>
								</li>
							</ul>
						</div>

					</section>

				</div>
				<!-- /.l-main -->

			</div>

		</div>
		<!--▲メインコンテンツ 終了-->
<?php get_footer(); ?>
