<?php get_header(); ?>

		<!--▼トップページ メインビジュアル : 開始-->
		<div class="visual">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/main-visual.png" alt="いっぱいに込める思い。Ozone Cafe">
			<div class="container">
				<h1 class="site-desctiption">
					<?php bloginfo( 'description' ); ?>
				</h1>
			</div>
		</div>
		<!--▲トップページ メインビジュアル : 終了-->

		<!--▼メインコンテンツ 開始-->
		<div id="main" class="l-one-column clearfix">

			<div class="container">

				<div class="l-main" role="main">

					<section class="home posts">

					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) :
							the_post();?>
						<article <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
						<?php endwhile; ?>
					<?php endif;?>

						<div class="home-banner">
							<ul>
								<li>
									<a href="<?php echo esc_url( home_url( '/menus/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/home-banner-menu.png" alt="メニュー"></a>
								</li>
								<li>
									<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/home-banner-access.png" alt="アクセス"></a>
								</li>
								<li>
									<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/home-banner-recruit.png" alt="スタッフ募集"></a>
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
