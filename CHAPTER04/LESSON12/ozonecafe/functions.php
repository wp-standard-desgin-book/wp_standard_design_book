<?php
/**
 * テーマのための関数
 *
 */


function ozonecafe_scripts(){

	wp_enqueue_style( 'ozonecafe-style', get_stylesheet_uri(), null );

}

add_action( 'wp_enqueue_scripts', 'ozonecafe_scripts' );
