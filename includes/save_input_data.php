<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Save input data */
function trinxy_save_postdata($post_id)
{
    if (isset($_POST['trinxy-insta-1']))
    {
        $url = sanitize_text_field( $_POST['trinxy-insta-1']);
        update_post_meta($post_id, 'trinxy_insta_1', $url);
    }
    if (isset($_POST['trinxy-insta-2']))
    {
        $url = sanitize_text_field($_POST['trinxy-insta-2']);
        update_post_meta($post_id, 'trinxy_insta_2', $url);
    }
    if (isset($_POST['trinxy-insta-3']))
    {
        $url = sanitize_text_field($_POST['trinxy-insta-3']);
        update_post_meta($post_id, 'trinxy_insta_3', $url);
    }
    if (isset($_POST['trinxy-insta-4']))
    {
        $url = sanitize_text_field($_POST['trinxy-insta-4']);
        update_post_meta($post_id, 'trinxy_insta_4', $url);
    }
}
add_action('save_post', 'trinxy_save_postdata');

