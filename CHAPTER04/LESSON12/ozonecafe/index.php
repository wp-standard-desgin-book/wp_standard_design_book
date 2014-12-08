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

						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
						</li>

						<li>
							<span>SHOP</span>
							<ul class="sub-menu">
								<li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">店舗案内</a>
								</li>
								<li><a href="<?php echo esc_url( home_url( '/shop/taste/' ) ); ?>">こだわり</a>
								</li>
								<li><a href="<?php echo esc_url( home_url( '/shop/history/' ) ); ?>">歴史</a>
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
								<li><a href="<?php echo esc_url( home_url( '/recruit/form/' ) ); ?>">応募フォーム</a>
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

		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">

			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div class="content-area posts" role="main">

						<header class="entry-header">
							<h1 class="entry-title archive-title">
								ブログ記事一覧
							</h1>

						</header>
						<!--/.entry-header-->

						<!-- ▼ブログ記事一覧 : 開始 -->

						<!--▼一記事目 : 開始-->
						<article id="post-1" class="post hentry">

							<header class="entry-header">

								<h1 class="entry-title"><a href="<?php echo esc_url( home_url( '/blog/article01.html' ) ); ?>">サイトをオープンしました。</a>
								</h1>

								<div class="entry-meta">

									<span class="date"><time class="entry-date">2014年9月22日</time></span>

									<span class="categories-links info"><a href="#" rel="category">新着情報</a></span>
								</div>

							</header>
							<!--/.entry-header-->

							<div class="entry-content">
								<div class="thumbnail">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/content/article01-thumbnail01.png" alt="サイト公開しました。">
								</div>

								<p>2015年2月10日に本Webサイトをオープンしました。
									<br> Ozone Cafe 最新情報、お役立ち情報を随時掲載していきます。</p>
								</p>

							</div>
							<!--/.entry-content-->

						</article>
						<!--▲一記事目 : 終了-->

						<!--▼二記事目 : 開始-->
						<article id="post-2" class="post hentry">

							<header class="entry-header">

								<h1 class="entry-title"><a href="<?php echo esc_url( home_url( '/blog/article02.html' ) ); ?>">季節のショートケーキを発売します。</a>
								</h1>

								<div class="entry-meta">

									<span class="date"><time class="entry-date">2014年9月22日</time></span>

									<span class="categories-links limited"><a href="#" rel="category">期間限定</a></span>

								</div>
								<!--/.entry-meta-->

							</header>
							<!--/.entry-header-->

							<div class="entry-content">

								<div class="thumbnail">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/content/menu08-thumbnail01.png" alt="季節のショートケーキ">
								</div>

								<p>1ヶ月間限定として、季節のショートケーキを販売致します。
									<br>通常のショートケーキとことなり、季節のフルーツをふんだんに使用しています。</p>

							</div>
							<!--/.entry-content-->

							<footer class="entry-footer">
								<span class="comments-link"><a href="#">2件のコメント</a></span>
								<span class="tag-links"><a href="#" rel="tag">ケーキ</a></span>
							</footer>

						</article>
						<!--▲二記事目 : 開始-->

						<!--▼ ページネーション : 開始-->
						<nav class="navigation paging-navigation" role="navigation">
							<div class="nav-links">
								<div class="nav-previous">
									<a href="../"><span class="meta-nav">←</span> 古い投稿</a>
								</div>
								<div class="nav-next">
									<a href="../">新しい投稿 <span class="meta-nav">→</span></a>
								</div>
							</div>
						</nav>
						<!--▲ ページネーション : 終了-->

						<!-- ▲ブログ記事一覧 : 終了 -->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<!-- ▼サイドカラム : 開始-->
				<aside id="secondary" class="l-sidebar">

					<!--▼ 検索ウィジェット : 開始-->
					<div class="widget widget_search">
						<h2 class="widget-title">検索</h2>
						<div class="search form-control">
							<form action="" id="searchform">
								<input type="search" name="s" id="s" class="search-input" value="">
								<input type="submit" value="検索" id="searchsubmit">
							</form>
						</div>

					</div>
					<!--▲ 検索ウィジェット : 終了-->

					<!--▼カテゴリウィジェット : 開始-->
					<div class="widget widget_categories">

						<h2 class="widget-title">
							メニューカテゴリー
						</h2>

						<ul>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">アイスドリンク</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">ホットドリンク</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">フード</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">スイーツ</a>
							</li>
						</ul>

					</div>
					<!--▲ カテゴリウィジェット : 終了-->

					<!--▼ サイドバーバナー : 開始-->
					<div class="widget banner">

						<p>
							<a href="<?php echo esc_url( home_url( '/recruit/form.html' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/banner-contact.png" alt="お問い合わせ">
							</a>
						</p>

						<p>
							<a href="<?php echo esc_url( home_url( '/shop/#access' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/banner-access.png" alt="アクセス">
							</a>
						</p>

						<p>
							<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/banner-blog.png" alt="ブログ">
							</a>
						</p>

					</div>
					<!--▲ サイドバーバナー : 終了-->

				</aside>
				<!-- ▲サイドカラム : 終了-->
			</div>

		</div>
		<!--▲メインコンテンツ : 終了-->
		<!--▼フッター : 開始-->
		<footer id="colophon" class="footer text-center">

			<div class="container">

				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo-footer.png" alt="Ozone Cafe">
					</a>
					<p>"一杯"に込める思い。Ozone Cafe</p>
				</div>
				<!--/.footer-logo-->

				<div class="footer-navigation">
					<ul>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a>
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
							<a href="<?php echo esc_url( home_url( '/recruit/form/' ) ); ?>">求人応募</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">サイトマップ</a>
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