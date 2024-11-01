<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Add admin page (and menu) */

function trinxy_admin_menu()
{
    add_menu_page(__('Trinxypost admin page', 'my-textdomain') , __('Trinxypost', 'my-textdomain') , 'manage_options', 'trinxy-instagram-admin', 'trinxy_admin_page_contents', 'dashicons-instagram', 65);
}

add_action('admin_menu', 'trinxy_admin_menu');

function trinxy_register_admin_settings()
{
    register_setting('trinxy_plugin_options', 'trinxy_plugin_options');
    add_settings_section('api_settings', 'Add your Instagram token', 'trinxy_plugin_section_text', 'trinxy-instagram-admin', 'trinxy_plugin_options_validate');

    add_settings_field('trinxy_plugin_setting_token', 'Instagram token', 'trinxy_plugin_setting_token', 'trinxy-instagram-admin', 'api_settings');
}
add_action('admin_init', 'trinxy_register_admin_settings');
/* Validatate input */
function trinxy_plugin_options_validate($input)
{
    $newinput['token'] = trim($input['token']);
    if (!preg_match('/^[a-z0-9]{32}$/i', $newinput['token']))
    {
        $newinput['token'] = '';
    }

    return $newinput;
}

function trinxy_plugin_section_text()
{
    echo '<p>Please add your Instagram token in order for the plugin to work</p>';
}

function trinxy_plugin_setting_token()
{
    $options = get_option('trinxy_plugin_options');
    echo '<input id="trinxy_plugin_setting_token" type="text" value="' . $options['token'] . '" name="trinxy_plugin_options[token]">';

}