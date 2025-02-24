<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く

//JSを読み込み(fontawesome)
function enqueue_scripts(){
  // JavaScript

  //fontawesomeのCDNを使用
  wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/9ab3ae9094.js', [], null, true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');