<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>CHAPTER03 LESSON07 サンプルコード</title>
</head>
<body>

<h1>CHAPTER03 LESSON07 サンプルコード</h1>

<h2>PHPのコメント記法</h2>

<h3>複数行コメント</h3>
<?php 
	echo 'おはよう';
	/* echo 'こんにちは';
	echo 'こんばんは'; */
?>

<h3>1行コメント</h3>
<?php 
	echo 'おはよう';
	//echo 'こんにちは';
	//echo 'こんばんは';
?>

<?php
	echo 'おはよう'; //echo 'こんにちは';
	echo 'こんばんは';
?>


<h2>変数を使ってあいさつを5回表示</h2>
<?php 
	$hello = 'さん、こんにちは！';
	echo '<p>伊藤' . $hello . '</p>';
	echo '<p>山田' . $hello . '</p>';
	echo '<p>佐藤' . $hello . '</p>';
	echo '<p>高橋' . $hello . '</p>';
	echo '<p>鈴木' . $hello . '</p>';
?>


<h2>変数や文字列を連結する</h2>
<?php 
	$name = '伊藤';
	$hello = 'さん、こんにちは！';
	echo '<p> ' . $name . $hello . '</p>';
?>

<h2>配列を使って変数に複数のデータを入れる (1)</h2>
<?php 
	$name = array (
			'伊藤', '山田', '佐藤', '高橋', '鈴木'
		);
	$hello = 'さん、こんにちは！';
	echo '<p>' . $name[0] . $hello . '</p>';
	echo '<p>' . $name[1] . $hello . '</p>';
	echo '<p>' . $name[2] . $hello . '</p>';
	echo '<p>' . $name[3] . $hello . '</p>';
	echo '<p>' . $name[4] . $hello . '</p>';
?>

<h2>配列を使って変数に複数のデータを入れる (2. 連想配列)</h2>
<?php
	$name = array (
			'name01' => '伊藤',
			'name02' => '山田',
			'name03' => '佐藤',
			'name04' => '高橋',
			'name05' => '鈴木'
		);
	$hello = 'さん、こんにちは！';
	echo '<p>' . $name['name01'] . $hello . '</p>';
	echo '<p>' . $name['name02'] . $hello . '</p>';
	echo '<p>' . $name['name03'] . $hello . '</p>';
	echo '<p>' . $name['name04'] . $hello . '</p>';
	echo '<p>' . $name['name05'] . $hello . '</p>';
?>

<hr />

<h2>COLUMN. クォーテーションの記述方法と出力結果の違い</h2>
<?php
	echo '<p>伊藤' . $hello . '</p>';
	echo "<p>伊藤$hello</p>";
	echo '<p>伊藤$hello</p>';
?>

</body>
</html>
