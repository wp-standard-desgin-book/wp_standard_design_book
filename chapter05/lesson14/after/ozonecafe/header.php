<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title>アーカイブ | Ozone Cafe</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_enqueue_style(
			'base-style', //CSSの識別ID
			esc_url( get_stylesheet_uri() ), //CSSファイルへのpath
			array(), //先に読み込むCSS
			'1.0', //CSSファイルのバージョン指定
			'all' //CSSのmedia属性
		); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- ▼ヘッダー : 開始-->
		<header class="header">
			<div class="container">
				<div class="header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo.png" alt="Ozone Cafe"></a>
				</div><!--/.header-logo-->

				<nav class="header-navigation">
					<ul class="nav-menu">
						<li><a href="../index.html">HOME</a></li>
						<li>
							<span>SHOP</span>
							<ul class="sub-menu">
								<li><a href="../shop/index.html">店舗案内</a></li>
								<li><a href="../shop/taste.html">こだわり</a></li>
								<li><a href="../shop/history.html">歴史</a></li>
							</ul>
						</li>
						<li>
							<a href="../menus/index.html">MENUS</a>
						</li>
						<li>
							<span>RECRUIT</span>
							<ul class="sub-menu">
								<li><a href="../recruit/index.html">スタッフ募集</a></li>
								<li><a href="../recruit/form.html">応募フォーム</a></li>
							</ul>
						</li>
						<li><a href="../blog/index.html">BLOG</a></li>
					</ul>
				</nav><!--/.header-navigation-->

			</div>
		</header>
		<!-- ▲ヘッダー : 終了 -->
