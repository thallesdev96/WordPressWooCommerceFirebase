<?php

// Include the Firebase PHP SDK
//require_once 'vendor/autoload.php';

var_dump('th7');
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Replace with the path to your Firebase credentials JSON file
$serviceAccount = ServiceAccount::fromJsonFile('path/to/firebase_credentials.json');

// Initialize Firebase
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

// Get a reference to your Firebase Realtime Database
$database = $firebase->getDatabase();

// Hook into WooCommerce order creation event
add_action('woocommerce_new_order', 'post_order_data_to_firebase', 10, 1);
function post_order_data_to_firebase($order_id) {
    // Get the order object
	print_r('teste');
    $order = wc_get_order($order_id);

    // Prepare data to be posted to Firebase
    $order_data = array(
        'id' => $order->get_id(),
        'status' => $order->get_status(),
        'date_created' => $order->get_date_created()->format('Y-m-d H:i:s'),
        // Add more data as needed
    );

    // Post order data to Firebase
    $database->getReference('orders/' . $order_id)->set($order_data);
}
