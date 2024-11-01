<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Posts  extra large (Display 1 post in row)*/
function trinxy_insta_post_extra_large()
{

    $options = get_option('trinxy_plugin_options');
    $post = get_post();
    $token = $options["token"];
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
    include (plugin_dir_path(__FILE__) . 'image_array.php');

    $img_output = 'insta-output-' . $post->ID;
    $out = "<div class='trinxy-container trinxy-instagram-posts-extra-large' id='insta-output-" . $post->ID . "'></div>";
    for ($i = 0;$i < count($img_arr);$i++)
    {
        if (isset($img_arr[$i]))
        {
            $post_content .= '
			<script>
					var url ="' . $img_arr[$i] . '"
					var output = "' . $img_output . '"
					var access_token = "' . $token . '"
					var size = "extra-large"
					instaCall(url,output, access_token,size);
					</script>
				';
        }
    }
    return $out . $post_content;
}
add_shortcode('trinxypost-posts-extra-large', 'trinxy_insta_post_extra_large');

/* Posts large (Display 2 post in row)*/
function trinxy_insta_post_large()
{
    $options = get_option('trinxy_plugin_options');
    $post = get_post();
    $token = $options["token"];
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
    include (plugin_dir_path(__FILE__) . 'image_array.php');

    $img_output = 'insta-output-' . $post->ID;
    $out = "<div class='trinxy-container trinxy-instagram-posts-large' id='insta-output-" . $post->ID . "'></div>";
    for ($i = 0;$i < count($img_arr);$i++)
    {
        if (isset($img_arr[$i]))
        {
            $post_content .= '
			<script>
					var url ="' . $img_arr[$i] . '"
					var output = "' . $img_output . '"
					var access_token = "' . $token . '"
					var size = "large"
					instaCall(url,output, access_token,size);
					</script>
				';
        }
    }
    return $out . $post_content;
}
add_shortcode('trinxypost-posts-large', 'trinxy_insta_post_large');