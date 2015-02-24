<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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

					<?php
					/**
					* グローバルナビゲーション
					*/
					wp_nav_menu( array(
						'theme_location' => 'header',
					) );
					?>
				</nav><!--/.header-navigation-->

			</div>
		</header>
		<!-- ▲ヘッダー : 終了 -->
		<?php if ( class_exists( 'WP_SiteManager_bread_crumb' ) && !is_front_page() ) {
			WP_SiteManager_bread_crumb::bread_crumb();
		} ?>
