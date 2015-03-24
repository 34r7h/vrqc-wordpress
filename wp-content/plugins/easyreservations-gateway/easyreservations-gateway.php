<?php
/**
 * Plugin Name: easyreservations-gateway
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Custom payment gateway for VRQC project
 * Version: The plugin's version number. Example: 1.0.0
 * Author: irth under duress and coercion. j/k! mostly :P
 * Author URI: http://irth.something
 * Text Domain: Optional. Plugin's text domain for localization. Example: easyreservations-gateway
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: MIT
 */



function register_my_custom_gateway($gateways){
	$gateways['my_gateway'] = array(
		'name' => 'Custom Gateway',
        'form_name' => 'AE1313-01',
        'amount_name' => 'DollarAmount',

    );
    return $gateways;
}

add_filter('reservations_register_gateway', 'register_my_custom_gateway', 10, 1);


function generate_my_gateway_payment_form($res,$id,$title,$price,$nonce){
//Open form with link to gateway; the name of this should be the value of form_name at gateway registration
$form = '<form name="AE1313-01" action="https://rpm.demo.e-xact.com/payment" method="post" id="AE1313-01">';

    //Add a image as button to click on
    $form.= '<input type="image" src="http://link-to-image.png" border="0" name="submit" alt="Pay with custom gateway!">';

    //Create array with the fields required by gateway
    $array = array(
    //The id required for the ipn function is the variable $id
    'invoice' => $id,

    //Description is the variable $title
    'item_name' => $title,

    //Field for price; It's key should be the value of amount_name at gateway registration
    'amount' => $price,

    //Link to your ipn script if you create one
    'notify_url' => WP_PLUGIN_URL.'/example/example_ipn.php',

    //If the gateway supports a custom field use it for the nonce and check it in the ipn
    'custom' => $nonce,

    //Some examples that are required in most gateways in some form
    'business' => 'my_shop_identifier',
    'cancel_return' => 'http://my-site.com/cancel/',
    'currency_code' => 'USD',
    'return' => 'http://my-site.com/thanks/'
    );

    //Generate hidden fields from the array
    $form .= easyreservations_generate_hidden_fields($array);
    //Close form
    $form .= '</form>';

return $form;
}
add_filter('reservations_generate_gateway_button', 'generate_my_gateway_payment_form', 10, 5);

