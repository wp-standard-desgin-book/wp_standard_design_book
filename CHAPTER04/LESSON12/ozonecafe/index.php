<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<meta name="description" content="60年以上続くこの味を。名古屋市大曽根で楽しめる、本格的コーヒーショップ">
		<meta name="keywords" content="大曽根,カフェ,名古屋,老舗,コーヒーショップ">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="style.css" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- ▼ヘッダー : 開始 -->
		<header class="header">

			<div class="container">

				<div class="header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="OzoneCafe">
					</a>
				</div>
				<!--/.header-logo-->

				<nav class="header-navigation">

					<ul class="nav-menu">

						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
						</li>

						<li>
							<span>SHOP</span>
							<ul class="sub-menu">
								<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">ショップについて</a>
								</li>
								<li><a href="<?php echo esc_url( home_url( '/shop/taste.html' ) ); ?>">こだわり</a>
								</li>
								<li><a href="<?php echo esc_url( home_url( '/shop/history.html' ) ); ?>">歴史</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="<?php echo esc_url( home_url( '/menus/' ) ); ?>">MENUS</a>
						</li>

						<li>
							<span>RECRUIT</span>
							<ul class="sub-menu">
								<li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">スタッフ募集</a>
								</li>
								<li><a href="<?php echo esc_url( home_url( '/recruit/form.html' ) ); ?>">応募フォーム</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">BLOG</a>
						</li>

					</ul>
				</nav>
				<!--/.header-navigation-->

			</div>

		</header>
		<!-- ▲ヘッダー : 終了 -->

		<!--▼トップページ メインビジュアル : 開始-->
		<div class="visual">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/main-visual.png" alt="いっぱいに込める思い。OzoneCafe">
			<div class="container">
				<h1 class="site-desctiption">
					"一杯"に込める思い。OzoneCafe
				</h1>
			</div>
		</div>
		<!--▲トップページ メインビジュアル : 終了-->

		<!--▼メインコンテンツ 開始-->
		<div id="main" class="l-one-column clearfix">

			<div class="container">

				<div class="l-main" role="main">

					<section class="home posts">

						<div class="home-banner">
							<ul>
								<li>
									<a href="<?php echo esc_url( home_url( '/menus/' ) ); ?>">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/home-banner-menu.png" alt="メニュー">
									</a>
								</li>
								<li>
									<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/home-banner-access.png" alt="アクセス">
									</a>
								</li>
								<li>
									<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/home-banner-recruit.png" alt="スタッフ募集">
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

		<!--▼フッター : 開始-->
		<footer id="colophon" class="footer text-center">

			<div class="container">

				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo-footer.png" alt="OzoneCafe">
					</a>
					<p><?php bloginfo( 'description' ); ?></p>
				</div>
				<!--/.footer-logo-->

				<div class="footer-navigation">
					<ul>
						<li>
							<a href="">トップページ</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">店舗案内</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/menus/' ) ); ?>">メニュー</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">スタッフ募集</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/recruit/form.html' ) ); ?>">求人応募</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/sitemap.html' ) ); ?>">サイトマップ</a>
						</li>
					</ul>

				</div>
				<!--/.footer-navigation-->

				<div class="footer-copyright">
					<p>copyright © 2014 <?php bloginfo( 'name' ); ?> All Right Reserved.</p>
				</div>

			</div>

		</footer>
		<!--▲フッター : 終了-->


		<?php wp_footer(); ?>
	</body>

</html>
