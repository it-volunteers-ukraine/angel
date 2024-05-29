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


//Pagination
function custom_woocommerce_loop_shop_per_page($cols) {
    $cols = 6;
    return $cols;
}
add_filter('loop_shop_per_page', 'custom_woocommerce_loop_shop_per_page', 20);

function custom_woocommerce_pagination_args($args) {
    $args['prev_text'] = '';
    $args['next_text'] = '';
    return $args;
}
add_filter('woocommerce_pagination_args', 'custom_woocommerce_pagination_args');


//Watchlist-count
/**
 * Get the auction watchlist-count for the current user using the shortcode.
 */
function get_user_auction_watchlist() {
    $shortcode_result = do_shortcode('[auctions_watchlist]');
    
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // To suppress HTML parsing errors
    $dom->loadHTML($shortcode_result);
    libxml_clear_errors();

    // Find all <li> elements within <ul class="products">
    $xpath = new DOMXPath($dom);
    $nodes = $xpath->query('//ul[contains(@class, "products")]/li');

    $watchlist = [];
    foreach ($nodes as $node) {
        // Here can get the data from each <li> element
        $watchlist[] = $dom->saveHTML($node);
    }

    return $watchlist;
}

/**
 * Get the count of products in the user's auction watchlist.
 *
 * @return int The count of products in the watchlist.
 */
function get_auction_watchlist_count() {
    $watchlist = get_user_auction_watchlist();
    return count($watchlist);
}

/**
 * Shortcode to display the count of products in the auction watchlist.
 *
 * @return string The count of products in the watchlist.
 */
function auction_watchlist_count_shortcode() {
    $count = get_auction_watchlist_count();
    return '<p class="wishlist-count">' . sprintf(__('%d', 'your-textdomain'), $count) . '</p>';
}
add_shortcode('auction_watchlist_count', 'auction_watchlist_count_shortcode');
