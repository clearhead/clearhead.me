<?php

/*
Plugin Name: Inspectlet - User Session Recording and Heatmaps
Plugin URI: http://www.inspectlet.com
Description: Inspectlet lets you record visitors as they're using your website.
Author: Inspectlet
Version: 1.0
License: GPL
Author URI: http://www.inspectlet.com
*/


add_action('admin_menu', 'insp_admin_menu');

function insp_admin_menu() {
  add_menu_page('Inspectlet JS Code', 'Inspectlet', 'administrator','insp_options', 'overview');
  add_action( 'admin_init', 'register_inspsettings' );
 }

function register_inspsettings() {
  register_setting( 'insp-group', 'insp_code' );
 } 

function overview() { ?>

<div class="wrap">
<h2>Inspectlet Analytics</h2>
    <form method="post" action="options.php">
        <?php settings_fields( 'insp-group' ); ?>
        <p style="width: 70%;">Please paste your Inspectlet Embed JS Code (retrieved from the dashboard) into the field below to start using Inspectlet with Wordpress. If you're having trouble integrating, drop us a line at support@inspectlet.com</p>
        <textarea name="insp_code" id="insp_code" cols="60" rows="15"><?php echo get_option('insp_code'); ?></textarea>
        <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
</div>


<?php }

function echoinspcode() {
  echo get_option("insp_code");
}

add_action('wp_footer', 'echoinspcode');

 ?>
