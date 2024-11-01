<?php
/*
Plugin Name: Tifinagh
Plugin URI: http://humaneye.co/tifi
Description: This plugin allows you to create your website in Tifinagh with various fonts, you can add other fonts of Tifinagh if you want.
Version: 1.0
Author: Human Eye
Contributors: Wordpress Tamazight
Author URI: http://humaneye.co
*/


/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/

$fu_upload_dir = wp_upload_dir();

// plugin folder url
if(!defined('FU_PLUGIN_URL')) {
	define('FU_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}
// plugin folder path
if(!defined('FU_PLUGIN_DIR')) {
	define('FU_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
}
// fonts folder path
if(!defined('FU_FONT_DIR')) {
	define('FU_FONT_DIR', $fu_upload_dir['basedir'] . '/fonts/' );
}
// fonts folder path
if(!defined('FU_FONT_URL')) {
	define('FU_FONT_URL', content_url() . '/uploads/fonts/' );
}
// old fonts folder path for backwards compatibility
if(!defined('FU_OLD_FONT_DIR')) {
	define('FU_OLD_FONT_DIR', FU_PLUGIN_DIR . 'fonts/' );
}
// old fonts folder url for backwards compatibility
if(!defined('FU_OLD_FONT_URL')) {
	define('FU_OLD_FONT_URL', FU_PLUGIN_URL . 'fonts/' );
}

// plugin root file
if(!defined('FU_PLUGIN_FILE')) {
	define('FU_PLUGIN_FILE', __FILE__);
}


/*
|--------------------------------------------------------------------------
| INTERNATION
|--------------------------------------------------------------------------
*/

function fu_textdomain() {
	load_plugin_textdomain( 'tifinagh', false, dirname( plugin_basename( EDD_PLUGIN_FILE ) ) . '/languages/' );
}
add_action('init', 'fu_textdomain');


/*
|--------------------------------------------------------------------------
| INC
|--------------------------------------------------------------------------
*/

include( FU_PLUGIN_DIR . '/inc/admin.php' );
include( FU_PLUGIN_DIR . '/inc/functions.php' );
include( FU_PLUGIN_DIR . '/inc/styles.php' );