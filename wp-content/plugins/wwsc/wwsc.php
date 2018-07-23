<?php
/**
 * Plugin Name:     WWSC
 * Description:     Hooks into woocommerce and adds rules for the product display.
 * Author:          Marica Alexandru
 * Text Domain:     wwsc
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wwsc
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

if ( ! function_exists( 'add_action' ) ) {
	exit;
}

if ( ! defined( 'WWSC_PLUGIN_FILE' ) ) {
	define( 'WWSC_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'WWSC_PLUGIN_DIR' ) ) {
	define( 'WWSC_PLUGIN_DIR', __DIR__ );
}

// Include the main Wwsc class.
if ( ! class_exists( 'Wwsc' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-wwsc.php';
	function contruct_wwsc() {
		$wwsc = new Wwsc();
	}
	add_action( 'plugins_loaded', 'contruct_wwsc' );
}
//Create/delete custom user on plugin activate/deactivate.
if ( ! class_exists( 'WwscInstall' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-wwscinstall.php';
	register_activation_hook( __FILE__, array( 'WwscInstall', 'wwsc_create_custom_user_role' ) );
	register_deactivation_hook( __FILE__, array( 'WwscInstall', 'wwsc_remove_custom_user_role' ) );
}

//Register the widget

// Include widget classes.
require_once dirname( __FILE__ ) . '/includes/widgets/class-wwsc-widget-products.php';

function wwsc_register_widgets() {

	register_widget( 'WWSC_Widget_Products' );

}
add_action( 'widgets_init', 'wwsc_register_widgets' );
