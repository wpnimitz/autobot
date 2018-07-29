<?php
/*
 * Plugin Name: Ninja Auto Bot
 * Plugin URI: https://webninjahq.com/?utm_campaign=PluginInfo&utm_source=plugin-header&utm_medium=plugin-uri
 * Description: Easily configure a messenger bot within your wordpress powered website.
 * Author: Nimitz Batioco
 * Version: 1.0.0
 * Author URI: https://webninjahq.com/?utm_campaign=PluginInfo&utm_source=plugin-header&utm_medium=author-uri
 * Text Domain: wnhq-autobot
*/

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/wpnimitz/autobot/',
	__FILE__, //Full path to the main plugin file or functions.php.
	'wnhq-autobot'
);