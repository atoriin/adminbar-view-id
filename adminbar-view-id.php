<?php
/**
* @package Adminbar View ID
* @version 1.0
*/
/*
Plugin Name: Adminbar View ID
Plugin URI: https://webeer.tech/adminbar-view-id
Description: 記事ページと固定ページの管理バーに記事IDを表示する
Author: atori
Version: 1.0
Author URI: https://webeer.tech
*/
function adminvar_view_id() {
  global $wp_admin_bar, $post;
  if( is_single() || is_page() ) {
    $wp_admin_bar->add_menu( array(
        'id' => 'mypost_id',
        'title' => '記事ID：' . $post->ID,
        'href' => ''
    ));
  }
}
add_action( 'wp_before_admin_bar_render', 'adminvar_view_id' );

