<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>CHAPTER03 LESSON08 サンプルコード</title>
</head>
<body>

<h1>CHAPTER03 LESSON08 サンプルコード</h1>

<h2>if文の記法</h2>
<?php
	$price = 500; //この数字を変えて実行してみよう
	if( 1000 >= $price ): //$priceが1000以下であれば ?>
	<p>買います！</p> <!-- ←条件を満たすときの処理を記述 -->
<?php endif; ?>


<h2>if ～ else文の記法</h2>
<h3>A、Bの順に価格をチェックしてどちらかを購入する場合</h3>
<?php
	$price_a = 1200; //この数字を変えて実行してみよう
	$price_b = 500; //この数字を変えて実行してみよう
?>
<?php if( 1000 >= $price_a ): //$price_aが1000以下であれば ?>
	<p>Aを買います！ </p> <!-- ←条件1を満たすときの処理を記述 -->
<?php elseif( 1000 >= $price_b ): //$price_bが1000以下であれば ?>
	<p>Bを買います！</p> <!-- ←条件2を満たすときの処理を記述 -->
<?php else: ?>
	<p>買いません。</p>
<?php endif; ?>


<h3>条件に当てはまれば両方購入する場合</h3>
<?php
	$price_a = 800; //この数字を変えて実行してみよう
	$price_b = 500; //この数字を変えて実行してみよう
?>
<?php if( 1000 >= $price_a ): //$price_aが1000以下であれば ?>
	<p>Aを買います！ </p> <!-- ←条件1を満たすときの処理を記述 -->
<?php endif; ?>
<?php if( 1000 >= $price_b ): //$price_bが1000以下であれば ?>
	<p>Bを買います！</p> <!-- ←条件2を満たすときの処理を記述 -->
<?php endif; ?>


<h2>While文を使ったループ</h2>
<?php
	$price_a = 200; //この数字を変えて実行してみよう
	$pocketmoney = 1000; //この数字を変えて実行してみよう
?>
<?php while( $pocketmoney >= $price_a ): //所持金が、商品Aの代金以上あれば ?>
	<p>買います！</p> <!-- ←条件を満たすときの処理を記述 -->
<?php $pocketmoney = $pocketmoney - $price_a; //所持金から商品Aの代金を引く ?>
	（残り<?php echo $pocketmoney; ?>円）</p>
<?php endwhile; ?>

<hr />

<h2>COLUMN. if文とwhile文の別の記述法</h2>
<?php
	$price_a = 200; //この数字を変えて実行してみよう
	$pocketmoney = 1000; //この数字を変えて実行してみよう

	if( 1000 >= $price_a ){
		echo '<p>Aを買います！ </p>';
	}

	while( $pocketmoney >= $price_a ){
		echo '<p>買います！ </p>';
		$pocketmoney = $pocketmoney - $price_a;
		echo '残り' . $pocketmoney . '円）</p>';
	}
?>

</body>
</html>
