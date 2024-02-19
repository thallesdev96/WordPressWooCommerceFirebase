<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');

$database = $factory->createDatabase();

// Hook into WooCommerce order creation event
/**
add_action( "woocommerce_rest_insert_shop_order_object", 'your_prefix_on_insert_rest_api', 10, 3 );
function your_prefix_on_insert_rest_api( $object, $request, $is_creating  ) {
    var_dump('th');exit;

    if ( ! $is_creating ) {
        return;
    }

    $order_id = $object->get_id();
    $wc_order = new WC_Order( $order_id );

    do_action( 'woocommerce_new_order', $order_id, $wc_order );
}**/