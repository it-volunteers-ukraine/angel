<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_all_filters( 'woocommerce_before_main_content');
remove_all_filters( 'woocommerce_after_single_product_summary');
