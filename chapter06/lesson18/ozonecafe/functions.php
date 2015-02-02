<?php

//コンテンツ幅をセット
if ( ! isset( $content_width ) ) {
	$content_width = 726;
}

function custom_theme_setup() {
	//head内にフィードリンクを出力
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
