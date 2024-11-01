<?php
/**
 * Author: Rebecca Seiron, Trinxy
 * Author URI: https://www.trinxy.se
 * Copyright:   2020 Rebecca Seiron & Mattias Tewdmark (https://www.trinxy.se)
 *
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

$active_insta_token = get_option('trinxy_plugin_options');
$insta_token = $active_insta_token['token'];
$class_html= "";
$class= "";
$disabled = "";
if($insta_token == "") {
	echo '<div class="trinxy-alert"><b>You have to insert your Instagram token</b>
	<p><a href="'.home_url(). '/wp-admin/admin.php?page=trinxy-instagram-admin/">Go to Trinxypost Pro dashboard</a> and insert your token</p></div>';
	$class_html = 'class="trinxy-inactive"';
	$class= "trinxy-inactive";
	$disabled = "disabled";
}else {
	$class_html = '';
	$class= "";
	$disabled = "";
}

?>
<h1>Shortcodes</h1>
<h3>Full posts</h3>
<p <?php echo $class_html; ?>>Show posts (1 post in a row): [trinxypost-posts-extra-large]</p>
<p <?php echo $class_html; ?>>Show posts (2 posts in a row): [trinxypost-posts-large]</p>
<p class="trinxy-inactive">Show posts (3 posts in a row): [trinxypost-posts-medium] *Avalable after activation</p>
<p class="trinxy-inactive">Show posts (4 posts in a row): [trinxypost-posts-small] *Avalable after activation</p>
<p class="trinxy-inactive">Show posts (5 posts in a row): [trinxypost-posts-extra-small] *Avalable after activation</p>
<h3>Posts author and like-section (no comments visible)</h3>
<p <?php echo $class_html; ?>>Show gallery (1 image in row): [trinxypost-comment-and-author-extra-large]</p>
<p <?php echo $class_html; ?>>Show gallery (2 images in row): [trinxypost-comment-and-author-large]</p>
<p class="trinxy-inactive">Show gallery (3 images in row): [trinxypost-comment-and-author-medium] *Avalable after activation</p>
<p class="trinxy-inactive">Show gallery (4 images in row): [trinxypost-comment-and-author-small] *Avalable after activation</p>
<p class="trinxy-inactive">Show gallery (5 images in row): [trinxypost-comment-and-author-extra-small] *Avalable after activation</p>
<h3>Image gallery (image only)</h3>
<p <?php echo $class_html; ?>>Show gallery (1 image in row): [trinxypost-gallery-extra-large]</p>
<p <?php echo $class_html; ?>>Show gallery (2 images in row): [trinxypost-gallery-large]</p>
<p <?php echo $class_html; ?>>Show gallery (3 images in row): [trinxypost-gallery-medium]</p>
<p <?php echo $class_html; ?>>Show gallery (4 images in row): [trinxypost-gallery-small]</p>
<p class="trinxy-inactive">Show gallery (5 images in row): [trinxypost-gallery-extra-small] *Avalable after activation</p>
<br>

<div class="trinxy-inline">
	<label for="trinxy-insta-1">URL:</label>
	<input class="<?php echo $class ?> trinxy-input" type="text" <?php echo $disabled ?> id="trinxy-insta-1" name="trinxy-insta-1" value="<?php echo $img_1; ?>">
	<label for="trinxy-insta-2">URL:</label>
	<input class="<?php echo $class ?> trinxy-input" type="text" <?php echo $disabled ?> id="trinxy-insta-2" name="trinxy-insta-2" value="<?php echo $img_2; ?>">
	<label for="trinxy-insta-3">URL:</label>
	<input class="<?php echo $class ?> trinxy-input" type="text" <?php echo $disabled ?> id="trinxy-insta-3" name="trinxy-insta-3" value="<?php echo $img_3; ?>">
	<label for="trinxy-insta-4">URL:</label>
	<input class="<?php echo $class ?> trinxy-input" type="text" <?php echo $disabled ?> id="trinxy-insta-4" name="trinxy-insta-4" value="<?php echo $img_4; ?>">
	<label class="trinxy-inactive" for="trinxy-insta-5">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-5" name="trinxy-insta-5" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-6">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-6" name="trinxy-insta-6" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-7">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-7" name="trinxy-insta-7" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-8">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-8" name="trinxy-insta-8" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-9">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-9" name="trinxy-insta-9" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-10">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-10" name="trinxy-insta-10" readonly value="Avalable after activation">
</div>
<div class="trinxy-inline">
	<label class="trinxy-inactive" for="trinxy-insta-11">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-11" name="trinxy-insta-11" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-12">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-12" name="trinxy-insta-12" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-13">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-13" name="trinxy-insta-13" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-14">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-14" name="trinxy-insta-14" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-15">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-15" name="trinxy-insta-15" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-16">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-16" name="trinxy-insta-16" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-17">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-17" name="trinxy-insta-17" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-18">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-18" name="trinxy-insta-18" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-19">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-19" name="trinxy-insta-19" readonly value="Avalable after activation">
	<label class="trinxy-inactive" for="trinxy-insta-20">URL:</label>
	<input class="trinxy-input trinxy-inactive-input" type="text" id="trinxy-insta-20" name="trinxy-insta-20" readonly value="Avalable after activation">
	</div>
