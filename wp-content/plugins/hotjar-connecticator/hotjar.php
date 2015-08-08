<?php
/**
* Plugin Name: Hotjar Connecticator
* Plugin URI: http://www.bluemedicinelabs.com/
* Version: 1.0
* Author: Blue Medicine Labs
* Author URI: http://www.bluemedicinelabs.com/
* Description: Allows you to insert your Hotjar script in the header of your WP site
* License: GPL2
*/

/*  Copyright 2014 Blue Medicine Labs

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    Credits: WPBeginner (http://bit.ly/wpb-ihf)

    "If I have seen further it is by standing on the shoulders of giants." Isaac Newton
*/

 /* Disclaimer: This plugin is created and maintained only by the authors at Blue Medicine Labs. 
 	Reference to Hotjar and use of any brand elements does not equate to endorsement. */

/**
* Hotjar Connecticator Class
*/
class bml_turboheaders {
	/**
	* Constructor
	*/
	public function __construct() {
		// Plugin Details
        $this->plugin = new stdClass;
        $this->plugin->name = 'hotjar-connecticator'; // Plugin Folder
        $this->plugin->displayName = 'Hotjar Connecticator'; // Plugin Name
        $this->plugin->version = '1.0';
        $this->plugin->folder = WP_PLUGIN_DIR.'/'.$this->plugin->name; // Full Path to Plugin Folder
        $this->plugin->url = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
        
        // Dashboard Submodule
        if (!class_exists('BMLHotjarDashboardWidget')) {
			require_once($this->plugin->folder.'/_modules/dashboard/dashboard.php');
		}
		$this->dashboard = new BMLHotjarDashboardWidget($this->plugin); 
		
		// Hooks
		add_action('admin_init', array(&$this, 'registerSettings'));
        add_action('admin_menu', array(&$this, 'adminPanelsAndMetaBoxes'));
        
        // Frontend Hooks
        add_action('wp_head', array(&$this, 'frontendHeader'));
	}
	
	/**
	* Register Settings
	*/
	function registerSettings() {
		register_setting($this->plugin->name, 'hotjar_insert_header', 'trim');
	}
	
	/**
    * Register the plugin settings panel
    */
    function adminPanelsAndMetaBoxes() {
    	add_submenu_page('options-general.php', $this->plugin->displayName, $this->plugin->displayName, 'manage_options', $this->plugin->name, array(&$this, 'adminPanel'));
	}
    
    /**
    * Output the Administration Panel
    * Save POSTed data from the Administration Panel into a WordPress option
    */
    function adminPanel() {
    	// Save Settings
        if (isset($_POST['submit'])) {
        	// Check nonce
        	if (!isset($_POST[$this->plugin->name.'_nonce'])) {
	        	// Missing nonce	
	        	$this->errorMessage = __('nonce field is missing. Settings NOT saved.', $this->plugin->name);
        	} elseif (!wp_verify_nonce($_POST[$this->plugin->name.'_nonce'], $this->plugin->name)) {
	        	// Invalid nonce
	        	$this->errorMessage = __('Invalid nonce specified. Settings NOT saved.', $this->plugin->name);
        	} else {        	
	        	// Save
	    		update_option('hotjar_insert_header', $_POST['hotjar_insert_header']);
				$this->message = __('Settings Saved.', $this->plugin->name);
			}
        }
        
        // Get latest settings
        $this->settings = array(
        	'hotjar_insert_header' => stripslashes(get_option('hotjar_insert_header')),
        );
        
    	// Load Settings Form
        include_once(WP_PLUGIN_DIR.'/'.$this->plugin->name.'/views/settings.php');  
    }
    
    /**
	* Loads plugin textdomain
	*/
	function loadLanguageFiles() {
		load_plugin_textdomain($this->plugin->name, false, $this->plugin->name.'/languages/');
	}
	
	/**
	* Outputs script / CSS to the frontend header
	*/
	function frontendHeader() {
		$this->output('hotjar_insert_header');
	}
	
	
	/**
	* Outputs the given setting, if conditions are met
	*
	* @param string $setting Setting Name
	* @return output
	*/
	function output($setting) {
		// Ignore admin, feed, robots or trackbacks
		if (is_admin() OR is_feed() OR is_robots() OR is_trackback()) {
			return;
		}
		
		// Get meta
		$meta = get_option($setting);
		if (empty($meta)) {
			return;
		}	
		if (trim($meta) == '') {
			return;
		}
		
		// Output
		echo stripslashes($meta);
	}
}
		
$hotjar = new bml_turboheaders();
?>