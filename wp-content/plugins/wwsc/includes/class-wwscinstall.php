<?php

/**
 * This class handles actions taking place on plugin activation and deactivation.
 */

class WwscInstall {

	/**
	 * Adds the custom user.Will be called on plugin activation.
	 */
	public function wwsc_create_custom_user_role() {
		global $wp_roles;

		if ( ! isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles(); // @codingStandardsIgnoreLine
		}
		$roles = $wp_roles->get_names();
		if ( ! $roles['b2bretail'] ) {
			add_role( 'b2bretail', __( 'B2B Retail', 'wwsc' ) );
		}
	}
	/**
	 * Removes the custom user.Will be called on plugin deactivation.
	 */
	public function wwsc_remove_custom_user_role() {
		global $wp_roles;

		if ( ! isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles(); // @codingStandardsIgnoreLine
		}
		$roles = $wp_roles->get_names();
		if ( $roles['b2bretail'] ) {
			remove_role( 'b2bretail' );
		}
	}
}
