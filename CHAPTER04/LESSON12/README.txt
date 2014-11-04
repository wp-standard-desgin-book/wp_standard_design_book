CHAPTER04 LESSON12

## テンプレートタグでサイト情報を出力する

### 講義内容


### 実習内容

* サイト名などbloginfoやタイトルタグなどを出力する / 画像やCSSなど外部ファイルのパスを出力する

### 作成ファイル

* functions.php : wp_enqueue_style(), wp_enqueue_script()の記述
* index.php : wp_head(), wp_footer(), get_template_directory_uri, bloginfo() の追加

### 変更点

* すべての画像タグの src 属性を置換 ``../images`` → ``<?php echo get_template_directory_uri(); ?>/images``
* すべての a タグの href 属性を置換 ``<a href=".." → ``<a href="<?php echo site_url(); ?>``
* head 内にある ``<link rel="stylesheet" href="../style.css" />`` を削除
* head タグ 閉じ間際に ``<?php wp_head(); ?>`` を追加
* body 閉じタグ 前に ``<?php wp_footer();?>`` を追加
