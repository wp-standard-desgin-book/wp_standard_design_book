<?php
/**
 * テーマのための関数
 */


/**
 * 静的ファイルの登録
 */
function ozonecafe_scripts(){

	wp_enqueue_style( 'ozonecafe-style', get_stylesheet_uri(), null );

}
add_action( 'wp_enqueue_scripts', 'ozonecafe_scripts' );

/**
 * テーマの基本的な設定
 */
function ozonecafe_setup(){

	// アイキャッチ画像をサポート
	add_theme_support( 'post-thumbnails' );

	// ナビゲーションをサポート
	add_theme_support( 'menus' );

	// ナビゲーション位置のサポート
	register_nav_menus(
		array(
			'header' => 'グローバルナビゲーション',
			'footer' => 'フッターナビゲーション',
		)
	);

	// カスタムヘッダ
	add_theme_support( 'custom-header' );

	// エディタースタイルを追加
	add_editor_style( 'editor-style.css' );


}
add_action( 'after_setup_theme', 'ozonecafe_setup' );

/**
 * ウィジェットの設定
 */

function ozonecafe_custom_sidebar() {
	register_sidebar( array(
		'name'          => 'サイドバー',
		'id'            => 'sidebar-primary',
		'before_widget' => '<div class="widget widget-sidebar %1$s %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ozonecafe_custom_sidebar' );


/**
* メニュー投稿タイプを追加
*/
function ozonecafe_register_post_type() {

	$labels = array(
		'name'                => 'メニュー',
		'singular_name'       => 'メニュー',
		'add_new'             => '新しいメニューを追加',
		'add_new_item'        => '新しいメニューを追加',
		'edit_item'           => 'メニューを編集',
		'new_item'            => '新しいメニュー',
		'view_item'           => 'メニューを見る',
		'search_items'        => 'メニューを検索',
		'not_found'           => 'メニューが見つかりませんでした',
		'not_found_in_trash'  => 'ゴミ箱の中にメニューが見つかりませんでした。',
		'parent_item_colon'   => 'メニュー:',
		'menu_name'           => 'メニュー',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array( '' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'thumbnail',
			'excerpt','custom-fields',
			'revisions',
			)
	);

	register_post_type( 'menus', $args );
}
add_action( 'init', 'ozonecafe_register_post_type' );


/**
 * タクソノミーの追加
 */
function ozonecafe_register_taxonomy() {

	$labels = array(
		'name'                  => 'メニューカテゴリー',
		'singular_name'         => 'メニューカテゴリー',
		'search_items'          => 'メニューカテゴリーを検索',
		'popular_items'         => 'すく使われているメニューカテゴリー',
		'all_items'             => '全てのメニューカテゴリー名',
		'parent_item'           => '親メニューカテゴリー',
		'parent_item_colon'     => '親メニューカテゴリー',
		'edit_item'             => 'メニューカテゴリーを編集',
		'update_item'           => 'メニューカテゴリーを更新',
		'add_new_item'          => '新しいメニューカテゴリーを追加',
		'new_item_name'         => '新しいメニューカテゴリー名',
		'add_or_remove_items'   => 'メニューカテゴリーを追加、または削除',
		'choose_from_most_used' => '最も使用しているメニューカテゴリーを選択',
		'menu_name'             => 'メニューカテゴリー',
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true, // 公開するか true | false
		'show_in_nav_menus' => true, // 外観 → メニュー に表示するか true | false
		'show_admin_column' => true, // 管理画面投稿一覧にメニューカテゴリを表示するか true | false
		'hierarchical'      => true, // 階層をもたせるか true | false
		'show_tagcloud'     => false, // タグクラウドを表示するか true | false
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array( '' ),
	);

	register_taxonomy( 'menucat', array( 'menus' ), $args );
}

add_action( 'init', 'ozonecafe_register_taxonomy' );
