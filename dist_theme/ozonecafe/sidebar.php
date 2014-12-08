<?php
/**
 * サイドバー
 */
 ?>
				<!-- ▼サイドカラム : 開始-->
				<aside id="secondary" class="l-sidebar">

						<?php
						if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
						<?php
						endif; // end sidebar widget area ?>
					<!--▼ サイドバーバナー : 開始-->
					<div class="widget banner">

						<p>
							<a href="<?php echo site_url( '/recruit/form.html' ); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/common/banner-contact.png" alt="お問い合わせ">
							</a>
						</p>

						<p>
							<a href="../shop/index.html#access">
								<img src="<?php echo get_template_directory_uri(); ?>/images/common/banner-access.png" alt="アクセス">
							</a>
						</p>

						<p>
							<a href="../blog/index.html">
								<img src="<?php echo get_template_directory_uri(); ?>/images/common/banner-blog.png" alt="ブログ">
							</a>
						</p>

					</div>
					<!--▲ サイドバーバナー : 終了-->

					<!--▼カテゴリウィジェット : 開始-->
					<div class="widget widget_category">

						<h2 class="widget-title">
							メニューカテゴリー
						</h2>

						<ul>
							<li>
								<a href="../menu/index.html">アイスドリンク</a>
							</li>
							<li>
								<a href="../menu/index.html">ホットドリンク</a>
							</li>
							<li>
								<a href="../menu/index.html">フード</a>
							</li>
							<li>
								<a href="../menu/index.html">スイーツ</a>
							</li>
						</ul>

					</div>
					<!--▲ カテゴリウィジェット : 終了-->

				</aside>
				<!-- ▲サイドカラム : 終了-->
