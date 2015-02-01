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

	/**
	 * 階層のあるカスタムタクソノミーを新たに追加
	 **/

	$args = array(
		'hierarchical'          => true, // 階層を利用するか
		'label'                => 'メニューカテゴリー', // ラベルの設定を指定
	);

	// menus 投稿タイプに "menucat" というスラッグ名でタクソノミーを登録
	register_taxonomy( 'menucat', 'menus', $args );

}

add_action( 'init', 'custom_register_taxonomy' );



//スタイルシート読み込み
function add_my_scripts() {
	wp_enqueue_style(
		'base-style', //CSSの識別ID
		get_stylesheet_uri(), //CSSファイルへのpath
		array(), //先に読み込むCSS
		'1.0', //CSSファイルのバージョン指定
		'all' //CSSのmedia属性
	);
		// jqueryを読み込む
	// wp_enqueue_script( 'jquery' );
	wp_enqueue_script(
		'jquery-scroll-top', // 読み込むファイルのハンドルネーム
		esc_url( get_template_directory_uri() ) . '/js/jquery.scroll.top.js', //ファイルのURL
		array( 'jquery' ), // jqueryが読み込まれた直後に読み込む
		'1.0.0', // バージョンを指定
		false  // wp_head 内で読み込む
	);

}
add_action( 'wp_enqueue_scripts', 'add_my_scripts' );
