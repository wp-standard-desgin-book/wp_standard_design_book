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

	// エディタースタイルの有効化
	add_editor_style( 'editor-style.css' );

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

function custom_register_post_type() {

	$labels = array(
		'name'                => 'メニュー', // 投稿タイプの一般名
		'singular_name'       => 'メニュー', // この投稿タイプのオブジェクト 1 個の名前（単数形）
		'add_new'             => '新しいメニューを追加',  // メニュー名のテキスト
		'add_new_item'        => '新しいメニューを追加', // 管理バーの「新規追加」ドロップダウンに入れる名前
		'edit_item'           => 'メニューを編集', // メニューの「すべての〜」に使うテキスト
		'new_item'            => '新しいメニュー', // 「新規追加」のテキスト
		'view_item'           => 'メニューを見る', // 「新規〜を追加」のテキスト
		'search_items'        => 'メニューを検索', // 「〜を編集」のテキスト
		'not_found'           => 'メニューが見つかりませんでした', // 管理画面でのラベル
		'not_found_in_trash'  => 'ゴミ箱の中にメニューが見つかりませんでした。', // 管理画面でのラベル
		'parent_item_colon'   => 'メニュー:', // 管理画面でのラベル
		'menu_name'           => 'メニュー', // 管理画面のサイド管理メニューに表示されるラベル
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false, // 固定ページと同じように
		'description'         => '当店のメニュー', // 投稿タイプの説明文
		'taxonomies'          => array( '' ), // 投稿タイプに登録するタクソノミーのスラッグ
		'public'              => true, // 公開するか
		'show_ui'             => true, // 管理画面で投稿UIを表示するか
		'show_in_menu'        => true, // 管理画面サイド管理メニューに表示するか
		'show_in_admin_bar'   => true, // 管理バーに表示するか
		'menu_position'       => 4, // 管理画面サイド管理メニューのボジション
		'menu_icon'           => null, // 管理画面サイド監理メニューのアイコン
		'show_in_nav_menus'   => true, // カスタムメニューの設定画面で表示するか
		'publicly_queryable'  => true, // フロントエンドでpost_typeクエリが実行可能か
		'exclude_from_search' => false, // 検索結果から除外するかどうか
		'has_archive'         => true, // アーカイブページをもたせるか
		'query_var'           => true, // この投稿に使用する query_var キーの名前。
		'can_export'          => true, // エクスポートさせるかどうか
		'rewrite'             => true, // この投稿タイプのリライト方法
		'capability_type'     => 'post', // 投稿タイプを操作出来る権限
		'supports'            => array(
			'title', 'editor', 'thumbnail', // 投稿編集時に表示するUI
			)
	);

	register_post_type( 'menus', $args );
}

add_action( 'init', 'custom_register_post_type' );

function custom_register_taxonomy() {

	// 階層のないカスタムタクソノミーを新たに追加

	// タクソノミーの名称に関する設定を配列で変数に渡す
	$labels = array(
		'name'                       => 'メニューカテゴリー', // タクソノミーの一般的な名前（普通は複数形）
		'singular_name'              => 'メニューカテゴリー', // タクソノミーのオブジェクト 1 個の名前（単数形）
		'search_items'               => 'メニューカテゴリーを検索',  // 「項目を検索」の文字列
		'popular_items'              => 'よく使われているメニューカテゴリーから選択',  // 「人気の項目」の文字列
		'all_items'                  => 'すべてのメニューカテゴリー', // 「すべての項目」の文字列
		'parent_item'                => '親のメニューカテゴリー', // 「親の項目」の文字列
		'parent_item_colon'          => '親のメニューカテゴリー,', //  parent_item と同じ文字列の後ろにコロン
		'edit_item'                  => 'メニューカテゴリーを編集', // 「項目を編集」の文字列
		'update_item'                => 'メニューカテゴリーを更新', // 「項目を更新」の文字列
		'add_new_item'               => '新しいメニューカテゴリーを追加', // 「新しい項目を追加」の文字列
		'new_item_name'              => '新しいメニューカテゴリー名を追加', // 「新しい項目の名前」の文字列
		'separate_items_with_commas' => 'メニューカテゴリーが複数ある場合はコンマで区切ってください', // タクソノミーのメタボックスで使われる「項目をコンマで区切ってください」の文字列
		'add_or_remove_items'        => '追加、または削除', // JavaScript が無効なときにメタボックスで使われる「項目の追加または削除」の文字列
		'choose_from_most_used'      => 'よく使われているものから選択する', // タクソノミーのメタボックスで使われる「よく使われている項目から選択」の文字列
		'not_found'                  => 'メニューカテゴリー見つかりませんでした', //項目が一つもないときにタクソノミーのメタボックスで「よく使われている項目から選択」をクリックすると表示される文字列
		'menu_name'                  => 'メニューカテゴリー', // メニュー名の文字列
	);

	$args = array(
		'hierarchical'          => false, // 階層を利用するか
		'labels'                => $labels, // ラベルの設定を指定
		'show_ui'               => true, // true にすると、タクソノミーを管理するためにデフォルトの UI を用意
		'show_admin_column'     => true, // true にすると、関連付けられた投稿タイプのテーブルにタクソノミーのカラムを自動生成します
		'update_count_callback' => '_update_post_term_count', //  関連付けられた $object_type（例えば投稿）の個数が更新された時に呼び出される関数の名前
		'query_var'             => true, // false にすると query_var を無効化します
		'rewrite'               => array( 'slug' => 'menucat' ), // false にすると、自動 URL 書き換えを回避
	);

	// タクソノミーを登録する
	register_taxonomy( 'menucat', 'menus', $args );

}

add_action( 'init', 'custom_register_taxonomy' );
