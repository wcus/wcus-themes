<?php
/**
 * Plugin Name: CampTix PayFast Payment Gateway
 * Plugin URI: https://gerhardpotgieter.com/tag/camptix-payfast/
 * Description: PayFast Payment Gateway for CampTix
 * Author: Gerhard Potgieter
 * Author URI: http://gerhardpotgieter.com/
 * Version: 1.0.0
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Add ZAR currency
add_filter( 'camptix_currencies', 'camptix_add_zar_currency' );
function camptix_add_zar_currency( $currencies ) {
	$currencies['ZAR'] = array(
		'label' => __( 'South African Rand', 'camptix' ),
		'format' => 'R %s',
	);
	return $currencies;
}

// Load the PayFast Payment Method
add_action( 'camptix_load_addons', 'camptix_payfast_load_payment_method' );
function camptix_payfast_load_payment_method() {
	if ( ! class_exists( 'CampTix_Payment_Method_PayFast' ) )
		require_once plugin_dir_path( __FILE__ ) . 'classes/class-camptix-payment-method-payfast.php';
	camptix_register_addon( 'CampTix_Payment_Method_PayFast' );
}

?>