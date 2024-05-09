<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_image_start', 5 );
function estore_wrapper_product_image_start() {
  ?>
  <div class="lot__info">
  <?php
}

add_action( 'woocommerce_before_single_product_summary', 'estore_wrapper_product_end', 25 );
function estore_wrapper_product_end() {
  ?>
  </div">
  <?php
}
