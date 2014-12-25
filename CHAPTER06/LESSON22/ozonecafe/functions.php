<?php

//コンテンツ幅をセット
if ( ! isset( $content_width ) ) {
	$content_width = 726;
}

function custom_theme_setup() {
	//head内にフィードリンクを出力
	add_theme_support( 'automatic-feed-links' );

	//アイキャッチ画像を有効化
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 175, 175, false );
	add_image_size ( 'menu-photo', 500, 500, true );

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


}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * サイドバーの登録
 */
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
