<?php
/*
 * Plugin Name: Ninja Auto Bot
 * Plugin URI: https://webninjahq.com/?utm_campaign=PluginInfo&utm_source=plugin-header&utm_medium=plugin-uri
 * Description: Easily configure a messenger bot within your wordpress powered website.
 * Author: Nimitz Batioco
 * Version: 1.0.12
 * Author URI: https://webninjahq.com/?utm_campaign=PluginInfo&utm_source=plugin-header&utm_medium=author-uri
 * Text Domain: wnhq-autobot
*/

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/wpnimitz/autobot/',
	__FILE__, //Full path to the main plugin file or functions.php.
	'wnhq-autobot'
);

function autobot_register_settings() {
   add_option( 'autobot_option_name', 'This is my option value.');
   register_setting( 'autobot_options_group', 'autobot_option_name', 'autobot_callback' );
}
add_action( 'admin_init', 'autobot_register_settings' );

function autobot_register_options_page() {
  add_options_page('Ninja Auto Bot', 'Ninja Auto Bot', 'manage_options', 'autobot', 'autobot_options_page');
}
add_action('admin_menu', 'autobot_register_options_page');