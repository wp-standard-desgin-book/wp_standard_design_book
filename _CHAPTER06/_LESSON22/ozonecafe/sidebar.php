
				<!-- ▼サイドカラム : 開始-->
				<aside id="secondary" class="l-sidebar">


					<?php if ( is_active_sidebar( 'sidebar-primary' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-primary' ); ?>
					<?php endif; ?>


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
