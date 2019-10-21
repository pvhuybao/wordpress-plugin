<?php
/**
 * @package ManagementPlugin
 */
/*
Plugin Name: Management Plugin
Description: Plugin for management.
Version: 1.0.0
Author: BAO
 */

// if(!defined('ABSPATH')) {
//     die;
// }

defined('ABSPATH') or die('You can\'t access this file !!!');

// if(!function_exists('add_action')) {
//     echo 'You can\'t access this file !!!';
//     exit;
// }
class ManagementPlugin {

    function __construct() {
        add_action('init', array($this, 'custom_post_type'));
    }

    function activate() {

    }

    function deactivate() {

    }

    function unistall() {

    }

    static function custom_post_type() {
        register_post_type('scholarship', ['public' => true, 'label' => 'Scholarship']);
    }
}

if(class_exists('ManagementPlugin')) {
    $managementPlugin = new ManagementPlugin();
}

//activation
register_activation_hook(__FILE__, array($managementPlugin, 'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($managementPlugin, 'deactivate'));

//uninstall
register_uninstall_hook(__FILE__, array($managementPlugin, 'uninstall'));