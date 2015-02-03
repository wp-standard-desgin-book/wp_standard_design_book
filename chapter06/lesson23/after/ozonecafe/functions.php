<?php
//コンテンツ幅をセット
if ( ! isset( $content_width ) ) {
	$content_width = 726;
}

function custom_theme_setup() {
	//head内にフィードリンクを出力
	add_theme_support( 'automatic-feed-links' );

	//タイトルタグを動的に出力
	add_theme_support( 'title-tag' );

	//アイキャッチ画像を有効化
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 175, 175, false );

	// カスタムメニューを有効化
	add_theme_support( 'menus' );
	// テーマの位置を定義
	register_nav_menus(
		array(
			'header' => 'グローバルナビゲーション',
			'footer' => 'フッターナビゲーション',
		)
	);

	// カスタムヘッダーを有効化
	add_theme_support( 'custom-header' );

	// editor-style.cssを登録
	add_editor_style( 'editor-style.css' );

}
add_action( 'after_setup_theme', 'custom_theme_setup' );

//スタイルシート読み込み
function add_my_scripts() {
	wp_enqueue_style(
		'base-style', //CSSの識別ID
		esc_url( get_stylesheet_uri() ), //CSSファイルへのpath ←追記
		array(), //先に読み込むCSS
		'1.0', //CSSファイルのバージョン指定
		'all' //CSSのmedia属性
	);
}
add_action( 'wp_enqueue_scripts', 'add_my_scripts' );

function custom_widget_register() {
	// ウィジェットエリアの登録
	register_sidebar( array(
		'name' => 'サイドバー',
		'id' => 'sidebar-primary',
		'before_widget' => '<div class="widget widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'custom_widget_register' );
