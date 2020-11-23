<?php
/*
Plugin Name:     Wiidoo Resales Online WP Free Plugin
Plugin URI:      https://wiidoomedia.com/resales-online-wordpress-plugin-for-resales-properties/
Description:     FREE Plugin for connecting Wordpress with ResalesOnline API property service.
Author:          Wiidoo
Author URI:      https://wiidoomedia.com/
Text Domain:     resales-marbella-wp-plugin
Domain Path:     /languages
Version:         9.8.8
@package         resales-marbella-wp-plugin
*/
defined('ABSPATH') or die('No script kiddies please!');


/*
 * Plugin constants
 */
require __DIR__ . '/scripts/function_list.php';

require __DIR__ . '/scripts/wiidoomedia_free_ro_plugin.php';

require __DIR__ . '/scripts/wii_props_details.php';
//results 


 // Admin options
 if (is_admin()) {
     require __DIR__ . '/admin/AdminOptionsApi.php';
 }
 
 
 add_action('plugins_loaded', 'roh_plugin_init');
 function roh_plugin_init()
 {
     load_plugin_textdomain('resales-marbella-wp-plugin', false,  basename( dirname( __FILE__ ) ) . '/languages');
 }