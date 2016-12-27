<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.asianadventuretrips.com/about-us
 * @since      1.0.0
 *
 * @package    Aat_Client_Manager
 * @subpackage Aat_Client_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Aat_Client_Manager
 * @subpackage Aat_Client_Manager/includes
 * @author     Abhishek Rijal <xqluzxwise@gmail.com>
 */
class Aat_Client_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'aat-client-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
