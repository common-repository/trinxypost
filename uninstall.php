<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined( 'WP_UNINSTALL_PLUGIN')) {
	exit;
}

//define a vairbale and store an option name as the value.
$option_name = 'trinxy_plugin_options';
//call delete option and use the vairable inside the quotations
delete_option($option_name);
// for site options in Multisite
delete_site_option($option_name);

/* uninstall shortcodes */
function trinxy_remove_shortcodes() {
    global $wpdb;
    $table_name = $wpdb->prefix .'posts';
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-posts-extra-large]', '' )"));
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-posts-large]', '' )"));

    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-comment-and-author-extra-large]', '' )"));
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-comment-and-author-large]', '' )"));

    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-gallery-extra-large]', '' )"));
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-gallery-large]', '' )"));
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-gallery-medium]', '' )"));
    $wpdb->query($wpdb->prepare("UPDATE $table_name SET post_content = replace(post_content, '[trinxypost-gallery-small]', '' )"));
}
trinxy_remove_shortcodes();

/* Uninstall postmeta */
$allposts = get_posts( 'numberposts=-1&post_type=post&post_status=any' );
 
foreach( $allposts as $postinfo ) {
		delete_post_meta($postinfo->ID, 'trinxy_insta_1');
		delete_post_meta($postinfo->ID, 'trinxy_insta_2');
		delete_post_meta($postinfo->ID, 'trinxy_insta_3');
		delete_post_meta($postinfo->ID, 'trinxy_insta_4');
}