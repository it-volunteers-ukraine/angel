<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_all_filters( 'woocommerce_before_main_content');
remove_all_filters( 'woocommerce_after_single_product_summary');
//remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
//remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
