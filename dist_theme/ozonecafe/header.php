<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="keywords" content="大曽根,カフェ,名古屋,老舗,コーヒーショップ">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<!-- ▼ヘッダー : 開始 -->
		<header class="header">

			<div class="container">

				<div class="header-logo">
					<a href="<?php echo site_url( '/' ) ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="<?php bloginfo( 'title' ) ?>">
					</a>
				</div>
				<!--/.header-logo-->

				<nav class="header-navigation">

					<?php
					/**
					 * グローバルナビゲーション
					 */
						wp_nav_menu( array(
							'theme_location' => 'header',
						) );
					?>
				</nav>
				<!--/.header-navigation-->

			</div>

		</header>
		<!-- ▲ヘッダー : 終了 -->
