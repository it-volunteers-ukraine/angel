<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_all_filters( 'woocommerce_before_main_content');
remove_all_filters( 'woocommerce_after_single_product_summary');
//remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
//remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);



//connected custom-auction-frontend.js
add_action( 'wp_enqueue_scripts', 'theme_custom_auction_script', 99999 );

if (!function_exists('theme_custom_auction_script')) {
    /**
     * Reassign WooCommerce_simple_auction scripts
     *
     * @return void
     */
    function theme_custom_auction_script()
    {

        if (class_exists('WooCommerce') && class_exists('WooCommerce_simple_auction')) {
            wp_dequeue_script('simple-auction-frontend');
            wp_deregister_script('simple-auction-frontend');


            // TODO
            // need refactoring of js-scripts vars
            $custom_data = [
                'finished' => esc_html__('Auction has finished!', 'wc_simple_auctions'),
                'checking' => esc_html__('Patience please, we are checking if auction is finished!', 'wc_simple_auctions'),
                'gtm_offset' => get_option('gmt_offset'),
                'started' => esc_html__('Auction has started! Please refresh your page.', 'wc_simple_auctions'),
                'no_need' => apply_filters('woocommerce_simple_auctions_winning_bid_message', esc_html__('No need to bid. Your bid is winning! ', 'wc_simple_auctions')),
                'compact_counter' => get_option('simple_auctions_compact_countdown', 'no'),
                'outbid_message' => wc_get_template_html('notices/error.php',
                    [
                        'messages' => array(esc_html__("You've been outbid!", 'wc_simple_auctions')),
                        'notices' => array_filter(array('error' => array('notice' => esc_html__("You've been outbid!", 'wc_simple_auctions')))),
                    ]
                )
            ];

            $simple_auctions_live_check = get_option('simple_auctions_live_check');
            $simple_auctions_live_check_interval = get_option('simple_auctions_live_check_interval');

            if ($simple_auctions_live_check == 'yes') {
                $custom_data['interval'] = isset($simple_auctions_live_check_interval) && is_numeric($simple_auctions_live_check_interval) ? $simple_auctions_live_check_interval : '1';
            }

            $script_vars = [
                'ajaxurl' => add_query_arg('wsa-ajax', ''),
                'najax' => true,
                'last_activity' => get_option('simple_auction_last_activity', '0'),
                'focus' => get_option(
                    'simple_auctions_focus',
                    'yes'
                )
            ];

            wp_enqueue_script(
                'custom-simple-auction-frontend',
                get_template_directory_uri() . '/assets/scripts/template-scripts/custom-auction-frontend.js',
                ['jquery'],
                ''
            );

            wp_localize_script(
                'custom-simple-auction-frontend',
                'SA_Ajax',
                $script_vars
            );

            wp_localize_script(
                'custom-simple-auction-frontend',
                'data',
                $custom_data
            );
        }
    }
}
