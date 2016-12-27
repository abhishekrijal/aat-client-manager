<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.asianadventuretrips.com/about-us
 * @since             1.0.0
 * @package           Aat_Client_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       AAT Client Manager
 * Plugin URI:        www.asianadventuretrips.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Abhishek Rijal
 * Author URI:        www.asianadventuretrips.com/about-us
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aat-client-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-aat-client-manager-activator.php
 */
function activate_aat_client_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aat-client-manager-activator.php';
	Aat_Client_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-aat-client-manager-deactivator.php
 */
function deactivate_aat_client_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aat-client-manager-deactivator.php';
	Aat_Client_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_aat_client_manager' );
register_deactivation_hook( __FILE__, 'deactivate_aat_client_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-aat-client-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_aat_client_manager() {

	$plugin = new Aat_Client_Manager();
	$plugin->run();

}
run_aat_client_manager();
