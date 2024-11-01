<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Trinxy input box HTML */
function trinxy_custom_box_html($post)
{
?>
	<div id="trinxy-admin-logo-wrapper-site">	<p><a href="https://www.tinxy.se"><img id="trinxy-admin-logo-site" src="https://www.trinxy.se/assets/images/logo_black.svg" alt="Trinxy logo"></a></p></div>
<div class="trinxy-site">
<?php
    include (plugin_dir_path(__FILE__) . 'image_post_meta.php');
        include_once (plugin_dir_path(__FILE__) . 'unactivated_inputs.php');
?>
</div>
<?php
}
include (plugin_dir_path(__FILE__) . 'save_input_data.php');