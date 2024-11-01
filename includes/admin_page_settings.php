<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/* Admin page HTML */
function trinxy_admin_page_contents()
{
    $options = get_option('trinxy-instagram-admin-options');
?>
	<div class="wrap">
		<h1>
			Trinxypost
		</h1>
		<div class="trinxy-wrapper">
		<div id="trinxy-admin-logo-wrapper">	<p><a href="https://www.tinxy.se"><img id="trinxy-admin-logo" src="https://www.trinxy.se/assets/images/logo_black.svg" alt="Trinxy logo"></a></p></div>
			<form method="POST" id="trinxy-admin-form" action="options.php">
				<?php
    		settings_fields('trinxy_plugin_options');
    		do_settings_sections('trinxy-instagram-admin');
				?> 			      
				<input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e('Save'); ?>" />
			</form>

<div class="activate-trinxy-instagram-posts">
<h2>Activate the full plugin</h2>
<p>To get full access to all plugin features you have to buy a license and activate the plugin.</p>
							<a class="button button-primary" href="https://www.trinxy.se/plugins/trinxypost-pro">Buy License</a>
						
</i>
</div>

<h2>Where can I find my Instagram token?</h2>
<p>You can create one here: <a taret="blank" href="https://developers.facebook.com/apps/">Facebook developers create app</a></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/X2ndbJAnQKM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div id="about-trinxy">
<a href="https://www.tinxy.se"><img id="trinxy-admin-logo" src="https://www.trinxy.se/assets/images/logo_black.svg" alt="Trinxy logo"></a>
<h2>Who are we?</h2>
<p>We're a Swedish web agency who focuses on 
	developing usable plugins and websites with high performance. </p>
	<p>We hope you like this one as much as we do :)</p>
</p>
</div>
</div>
	<?php
}

/* Add input boxes */
function trinxy_add_input()
{
    $screens = ['', 'trinxy_input'];
    foreach ($screens as $screen)
    {
        add_meta_box('trinxy-insta-post', 'Add your instagram post (URL)', 'trinxy_custom_box_html', $screen);
    }
}
add_action('add_meta_boxes', 'trinxy_add_input');