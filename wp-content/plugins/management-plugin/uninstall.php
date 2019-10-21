<?php
/**
 * @package ManagementPlugin
 */

if(!defined('WP_UNISTALL_PLUGIN')) {
    die;
}

//Clear Database stored data
$scholarships = get_post(array('post_type' => 'scholarship', 'numberposts' => -1));

foreach($scholarships as $scholarship) {
    wp_delete_post($scholarship, false);
}