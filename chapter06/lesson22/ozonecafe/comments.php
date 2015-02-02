<div id="comments" class="comments-area">

	<h2 class="comments-title">この記事へのコメント</h2>
	<?php if ( have_comments() ) : //もし、コメントが1件以上あったら ?>

	<ul class="comment-list">
		<?php wp_list_comments(); ?>
	</ul>

	<?php else: //もし、表示すべきコメントがなかったら ?>

		<p>コメントはまだありません。</p>

	<?php endif; //条件分岐終了 ?>

	<?php comment_form(); ?>

</div><!-- /#comments -->
