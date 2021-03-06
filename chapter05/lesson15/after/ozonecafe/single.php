<?php get_header(); ?>
		<!--▼メインコンテンツ : 開始-->
		<div id="main" class="l-two-column">
			<div class="container">

				<!-- ▼メインカラム : 開始-->
				<div id="main-content" class="l-main site-main">

					<!--▼記事コンテンツエリア : 開始-->
					<div id="primary" class="content-area posts">
						<?php if ( have_posts() ) : //もし、記事が1件以上あったら ?>
							<?php while ( have_posts() ) : //記事の表示条件を満たす間は繰り返す
							the_post(); //データ1件分を取り出して渡す ?>
						<!-- ▼ブログ記事 : 開始 -->
						<article <?php post_class(); ?>>
							<header class="page-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!--/.entry-header-->

							<div class="entry-meta">
								<span class="author">投稿者 : <?php the_author(); ?></span>
								<span class="date"><time class="entry-date"><?php the_time( 'Y年n月j日' ); ?></time></span>
								<span class="categories-links"><?php the_category( ',' ); ?></span>
							</div><!--/.entry-meta -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!--/.entry-content-->

							<footer class="entry-footer">
								<span class="comments-link"><a href="#">2件のコメント</a></span>
								<?php the_tags( '<span class="tag-links">', ',', '</span>' ); ?>
							</footer>
						</article>
						<!--▲ブログ記事 : 終了-->
							<?php endwhile; //投稿ループ終了 ?>
						<?php endif; //条件分岐終了 ?>

						<!--▼コメント : 開始-->
						<div class="comments-area">
							<h3 id="comments">この記事へのコメント</h3>
							<ol class="commentlist">
								<li class="comment even thread-even depth-1 parent" id="comment-2">
									<div id="div-comment-2" class="comment-body">
										<div class="comment-author vcard">
											<img alt="" src="http://1.gravatar.com/avatar/9298e50c384c4586941f72c9b9dc57b4?s=32&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G" class="avatar avatar-32 photo" height="32" width="32">
											<cite class="fn">テスト</cite>
											<span class="says">より:</span>
										</div>
										<em class="comment-awaiting-moderation">あなたのコメントは承認待ちです。</em>
										<br>
										<div class="comment-meta commentmetadata"><a href="#">2015年01月10日 12:51 AM</a></div>
										<p><a href="mailto:administer@example.com">administer@example.com</a></p>
										<div class="reply">
											<a class="comment-reply-link" href="#" onclick="return addComment.moveForm(&quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;23&quot;)">返信</a>
										</div>
									</div>
									<ul class="children">
										<li class="comment odd alt depth-2" id="comment-3">
											<div id="div-comment-3" class="comment-body">
												<div class="comment-author vcard">
													<img alt="" src="http://1.gravatar.com/avatar/9298e50c384c4586941f72c9b9dc57b4?s=32&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G" class="avatar avatar-32 photo" height="32" width="32">
													<cite class="fn">テスト</cite>
													<span class="says">より:</span>
												</div>
												<em class="comment-awaiting-moderation">あなたのコメントは承認待ちです。</em>
												<br>
												<div class="comment-meta commentmetadata"><a href="#">2015年02月10日 12:51 AM</a></div>
												<p>test</p>
												<div class="reply">
													<a class="comment-reply-link" href="#" onclick="return addComment.moveForm(&quot;div-comment-3&quot;, &quot;3&quot;, &quot;respond&quot;, &quot;23&quot;)">返信</a>
												</div>
											</div>
										</li><!-- #comment-## -->
									</ul><!-- .children -->
								</li><!-- #comment-## -->
							</ol>
							<div class="navigation">
								<div class="alignleft"></div>
								<div class="alignright"></div>
							</div>
							<div id="respond">
								<h3>コメントを残す</h3>
								<div id="cancel-comment-reply">
									<small><a rel="nofollow" id="cancel-comment-reply-link" href="../" style="display:none;">返信をキャンセルする。</a></small>
								</div>
								<form action="/" method="post" id="commentform">
									<p>
										<input type="text" name="author" id="author" value="" size="22" tabindex="1" aria-required="true">
										<label for="author"><small>名前 (必須)</small></label>
									</p>
									<p>
										<input type="text" name="email" id="email" value="" size="22" tabindex="2" aria-required="true">
										<label for="email"><small>メールアドレス (非公開) (必須)</small></label>
									</p>
									<p>
										<input type="text" name="url" id="url" value="" size="22" tabindex="3">
										<label for="url"><small>ウェブサイト</small></label>
									</p>
									<p>
										<small><strong>XHTML:</strong> 次のタグを使用できます:
										<code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></small>
									</p>
									<p>
										<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
									</p>
									<p>
										<input name="submit" type="submit" id="submit" tabindex="5" value="コメントを送信">
									</p>
								</form>
							</div>
						</div>
						<!--▲コメント : 終了-->

						<!--▼ 投稿ナビゲーション : 開始-->
						<?php the_post_navigation(); ?>
						<!--▲ 投稿ナビゲーション : 終了-->

					</div>
					<!--▲記事コンテンツエリア : 終了-->

				</div>
				<!-- ▲メインカラム : 終了-->

				<?php get_sidebar(); ?>

			</div><!-- /.container -->

		</div>
		<!--▲メインコンテンツ : 終了-->
<?php get_footer(); ?>
