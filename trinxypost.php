<?php
/**
 * Plugin Name: Trinxypost - Social media gallery and posts
 * Plugin URI: https://www.trinxy.se/plugins/trinxypost
 * Description: Display your (or others) instagram posts or make a gallery of instagram images. Easy to setup, easy to use!
 * Version: 1.1
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Add scripts to header */

function add_trinxy_insta_header_scripts()
{
		wp_enqueue_script('jquery');
    wp_register_style('css', plugins_url('public/css/main.css', __FILE__) , array() , null, 'all');
    wp_enqueue_style('css');
    wp_register_script('main', plugins_url('public/js/main.js', __FILE__) , array(
        "jquery"
    ));
    wp_enqueue_script('main');
}


if (!is_admin())
{
    add_action("wp_enqueue_scripts", "add_trinxy_insta_header_scripts", 11);
}
function add_trinxy_admin_insta_header_scripts()
{

    wp_register_style('admin-css', plugins_url('admin/css/admin.css', __FILE__) , array() , null, 'all');
    wp_enqueue_style('admin-css');

}

if (is_admin())
{
    add_action("admin_enqueue_scripts", "add_trinxy_admin_insta_header_scripts", 11);
}


/** Admin settings **/
require_once (plugin_dir_path(__FILE__) . 'includes/admin_page_settings.php');
require_once (plugin_dir_path(__FILE__) . 'includes/admin_settings.php');
require_once (plugin_dir_path(__FILE__) . 'includes/page_html.php');

/*** Add shortcode ***/
require_once (plugin_dir_path(__FILE__) . 'includes/image_only.php');
require_once (plugin_dir_path(__FILE__) . 'includes/full_post_content.php');
require_once (plugin_dir_path(__FILE__) . 'includes/comment_and_autor.php');

/**
 * Adds a privacy policy statement.
 */
function trinxy_add_privacy_policy_content()
{

    $content = '<p class="privacy-policy-tutorial">' . __('Trinxy.se privacy policy', 'text-domain') . '</p>' . '<strong class="privacy-policy-tutorial">' . __('Privacy policy', 'my_plugin_textdomain') . '</strong> ' . sprintf(__('When you leave a comment on this site, we send your name, email address, IP address and comment text to Trinxy.se. Trinxy.se does not retain your personal data. The trinxy.se privacy policy is <a href="%1$s" target="_blank">here</a>.', 'text-domain') , 'https://www.trinxy.se/integritetspolicy');
    wp_add_privacy_policy_content('trinxypost', wp_kses_post(wpautop($content, false)));
}

add_action('admin_init', 'trinxy_add_privacy_policy_content');

