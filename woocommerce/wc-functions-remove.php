<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_all_filters( 'woocommerce_before_main_content');
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_all_filters( 'woocommerce_after_single_product_summary');
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


// Remove WooCommerce classes 
function custom_remove_woocommerce_body_classes( $classes ) {   
    $woocommerce_classes_to_remove = array(
        'woocommerce',
        'woocommerce-page',
		'woocommerce-shop',
        'woocommerce-js',
		'woocommerce-account',     
    );
    foreach ( $woocommerce_classes_to_remove as $class ) {
        if ( in_array( $class, $classes ) ) {
            unset( $classes[ array_search( $class, $classes ) ] );
        }
    }
    return $classes;
}

add_filter( 'body_class', 'custom_remove_woocommerce_body_classes' );
