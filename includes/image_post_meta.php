<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

$img_1 = sanitize_text_field(get_post_meta($post->ID, 'trinxy_insta_1', true));
$img_2 = sanitize_text_field(get_post_meta($post->ID, 'trinxy_insta_2', true));
$img_3 = sanitize_text_field(get_post_meta($post->ID, 'trinxy_insta_3', true));
$img_4 = sanitize_text_field(get_post_meta($post->ID, 'trinxy_insta_4', true));

