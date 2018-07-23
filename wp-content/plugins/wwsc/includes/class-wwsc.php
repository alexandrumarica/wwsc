<?php

/**
 * This is the main class.It is responsible with setting and applying the filtering rules.
 */
final class Wwsc {
	/**
	 * This is the constructor of the class.
	 */
	public function __construct() {
		//This filters the "add to cart" and quantity input filed added in function.php based on user status.
		add_filter( 'woocommerce_is_purchasable', array( __CLASS__, 'wwsc_products_are_purchasable' ) );
		//Filters the visibility of the products based on user role and SKU prefix.
		add_action( 'woocommerce_product_is_visible', array( __CLASS__, 'wwsc_filter_products_visibility' ) );
	}
	/**
	 * This class is used for identifying the current user/status.
	 *
	 * @return false|string Role or false if user is not logged in.
	 */
	public static function wwsc_get_user_role() {
		if ( is_user_logged_in() ) {
			$user = wp_get_current_user();
			$role = (array) $user->roles;
			return $role[0];
		} else {
			return false;
		}
	}
	/**
	 * Sets the products purchaseability based on the user loggin status.
	 *
	 * @return bool If user is logged in it return true else return false
	 */
	public static function wwsc_products_are_purchasable() {
		return self::wwsc_get_user_role() ? true : false;
	}
	public static function wwsc_filter_products_visibility( $is_visible ) {
		global $product;

		//Getting the first numbers before the first '-'.
		$sku_array          = explode( '-', $product->get_sku() );
		$product_sku_prefix = $product ? reset( $sku_array ) : false;
		$user_role          = self::wwsc_get_user_role();

		if ( 'b2bretail' !== $user_role && '101' === $product_sku_prefix ) {
			$is_visible = false;
		}

		return $is_visible;
	}

}
