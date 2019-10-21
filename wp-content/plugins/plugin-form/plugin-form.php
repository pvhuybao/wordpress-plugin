<?php
/**
* Plugin Name: Plugin Form
* Description: .
* Version: 1.0.
* Author: Bao.
**/

add_action('admin_menu', 'test_plugin_setup_menu');

function test_plugin_setup_menu(){
        add_menu_page( 'Plugin Form', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
        echo "<h1>Hello World!</h1>";
}
 
?>