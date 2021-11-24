<?php
/*
Plugin Name: cybersmith-plugin
Plugin URI:
Description: Cybersmith Plugin For WordPress.
Version: 0.0.1
Author: 
Author URI: 
License: 
*/

function haniwa_first_plugin_the_content( $content ) {
    $info = '<p>＼ 先頭に追記されるよ！ ／</p>';
    return $info . $content;
}

add_filter( 'the_content', 'haniwa_first_plugin_the_content' );

?>
