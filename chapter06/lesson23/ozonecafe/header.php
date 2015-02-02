<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_enqueue_style(
			'base-style', 		//CSSの識別ID
			get_stylesheet_uri(),	//CSSファイルへのpath
			array(),			//先に読み込むCSS
			'1.0',				//CSSファイルのバージョン指定
			'all'				//CSSのmedia属性
		); ?>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!-- ▼ヘッダー : 開始 -->
		<header class="header">

			<div class="container">

				<div class="header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo.png" alt="Ozone Cafe">
					</a>
				</div>
				<!--/.header-logo-->

				<nav class="header-navigation">

					<ul class="nav-menu">

						<?php
						/**
						 * グローバルナビゲーション
						 */
							wp_nav_menu( array(
								'theme_location' => 'header',
							) );
						?>

					</ul>
				</nav>
				<!--/.header-navigation-->

			</div>

		</header>
		<!-- ▲ヘッダー : 終了 -->
