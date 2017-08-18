<?php
/*
Plugin Name: Inspectlet 2.0 - Session Recording and Heatmaps
Plugin URI: http://www.inspectlet.com
Description: Inspectlet lets you record visitors as they're using your website. Watch and analyze visitor behavior instantly by recording visitor sessions and generating eye-tracking heatmaps.
Author: Inspectlet
Version: 2.0
License: GPL
Author URI: http://www.inspectlet.com
*/
wp_register_style('inspectlet_wp.css', plugins_url('inspectlet-for-wordpress/inspectlet_wp.css'));

add_action('admin_menu', 'insp_admin_menu');

function insp_admin_menu() {
  add_menu_page('Inspectlet JS Code', 'Inspectlet', 'administrator','inspectlet_options', 'overview');
  add_action( 'admin_init', 'register_inspsettings' );
 }

function register_inspsettings() {
  register_setting( 'insp-group', 'insp_code' );
 }

function overview() { ?>
<div class="wrap" style="width: 50%; margin: 0 auto;">
<h2>Installing Inspectlet</h2>
<?php
 if(get_option('insp_code') == ''){
echo "<p style='width: 70%;'>Please paste your Inspectlet Embed JS Code (retrieved from the dashboard) into the field below to start using inspectlet with Wordpress.
  If you're having trouble integrating, drop us a line at hello@inspectlet.com</p>";
}
else{
echo '<h4>You have succcessfully added your Inspectlet tracking code to your Wordpress site:</h4>';
echo '<a target="_blank" href="http://www.inspectlet.com/dashboard/">Click Here to start watching your session recordings</a>';
}
?>
    <form method="post" action="options.php" <?php echo "wp_nonce_field('update-options');" ?> >
        <?php settings_fields( 'insp-group' ); ?>
        <br>
        <textarea name="insp_code" id="insp_code" cols="60" rows="18"><?php echo get_option('insp_code'); ?></textarea>
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
