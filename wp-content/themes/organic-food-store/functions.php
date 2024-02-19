<?php
/**
 * Organic Food Store functions and definitions
 *
 * @package Organic Food Store
 */




if ( ! function_exists( 'organic_food_store_setup' ) ) :
function organic_food_store_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	add_filter( 'should_load_separate_core_block_assets', '__return_false' );
	
}
endif; // organic_food_store_setup
add_action( 'after_setup_theme', 'organic_food_store_setup' );

function organic_food_store_scripts() {
	wp_enqueue_style( 'organic-food-store-basic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'organic_food_store_scripts' );

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
/**
 * Load core file
 */
require get_theme_file_path() . '/inc/core/init.php';

/**
 * Theme info
 */
require get_theme_file_path( '/inc/theme-info/theme-info.php' );

/**
 * Getting started notification
 */
require get_theme_file_path( '/inc/getting-started/getting-started.php' );



//require get_theme_file_path( 'firebase_integration.php' );
//var_dump('here');

// Include the file containing the trackSale function
//require_once '/sales_tracking.php';

// Hook the trackSale function to the woocommerce_new_order action
//add_action('woocommerce_new_order', 'track_sale_on_order', 10, 1);
//function track_sale_on_order($order_id) {
  //  $order = wc_get_order($order_id);
    //foreach ($order->get_items() as $item) {
      //  $product_id = $item->get_product_id();
      //  $product_name = $item->get_name();
       // $quantity = $item->get_quantity();
    //    trackSale($product_id, $product_name, $quantity);
  //  }
//}
