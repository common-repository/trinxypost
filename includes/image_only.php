<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Gallery extra large (Display 1 image in row)*/
function trinxy_insta_shortcode_extra_large()
{
    $options = get_option('trinxy_plugin_options');
    $post = get_post();
    $token = $options["token"];
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
    include (plugin_dir_path(__FILE__) . 'image_array.php');

    $img_output = 'insta-output-' . $post->ID;
    $out = "<div class='trinxy-container trinxy-instagram-posts-gallery-extra-large' id='insta-output-" . $post->ID . "'></div>";
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
					instaCallGallery(url,output, access_token,size);
					</script>
				';
        }
    }
    return $out . $post_content;
}

add_shortcode('trinxypost-gallery-extra-large', 'trinxy_insta_shortcode_extra_large');

/* Gallery large (Display 2 image in row)*/
function trinxy_insta_shortcode_large()
{
    $options = get_option('trinxy_plugin_options');
    $post = get_post();
    $token = $options["token"];
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
    include (plugin_dir_path(__FILE__) . 'image_array.php');

    $img_output = 'insta-output-' . $post->ID;
    $out = "<div class='trinxy-container trinxy-instagram-posts-gallery-large' id='insta-output-" . $post->ID . "'></div>";
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
					instaCallGallery(url,output, access_token,size);
					</script>
				';
        }
    }
    return $out . $post_content;
}
add_shortcode('trinxypost-gallery-large', 'trinxy_insta_shortcode_large');

/* Gallery medium (Display 3 image in row)*/

function trinxy_insta_shortcode_medium()
{
    $options = get_option('trinxy_plugin_options');
    $post = get_post();
    $token = $options["token"];
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
    include (plugin_dir_path(__FILE__) . 'image_array.php');

    $img_output = 'insta-output-' . $post->ID;
    $out = "<div class='trinxy-container trinxy-instagram-posts-gallery-medium' id='insta-output-" . $post->ID . "'></div>";
    for ($i = 0;$i < count($img_arr);$i++)
    {
        if (isset($img_arr[$i]))
        {
            $post_content .= '
			<script>
					var url ="' . $img_arr[$i] . '"
					var output = "' . $img_output . '"
					var access_token = "' . $token . '"
					var size = "medium"
					instaCallGallery(url,output, access_token,size);
					</script>
				';
        }
    }
    return $out . $post_content;
}
add_shortcode('trinxypost-gallery-medium', 'trinxy_insta_shortcode_medium');

/* Gallery small (Display 4 image in row)*/
function trinxy_insta_shortcode_small()
{
    $options = get_option('trinxy_plugin_options');
    $post = get_post();
    $token = $options["token"];
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
    include (plugin_dir_path(__FILE__) . 'image_array.php');

    $img_output = 'insta-output-' . $post->ID;
    $out = "<div class='trinxy-container trinxy-instagram-posts-gallery-small' id='insta-output-" . $post->ID . "'></div>";
    for ($i = 0;$i < count($img_arr);$i++)
    {
        if (isset($img_arr[$i]))
        {
            $post_content .= '
			<script>
					var url ="' . $img_arr[$i] . '"
					var output = "' . $img_output . '"
					var access_token = "' . $token . '"
					var size = "small"
					instaCallGallery(url,output, access_token,size);
					</script>
				';
        }
    }
    return $out . $post_content;
}
add_shortcode('trinxypost-gallery-small', 'trinxy_insta_shortcode_small');