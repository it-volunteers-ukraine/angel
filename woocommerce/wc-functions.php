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


//Add cart count 
if ( ! function_exists( 'estore_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	add_filter( 'woocommerce_add_to_cart_fragments', 'estore_woocommerce_cart_link_fragment' );
	function estore_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		estore_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();
		
		return $fragments;
	}
}

function estore_woocommerce_cart_link() {
	?>
	<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'estore' ); ?>">
		<span class="count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ) ;?></span>
		<i class="fa fa-cart" aria-hidden="true"></i>			
	</a>
	<?php
}

if ( ! function_exists( 'estore_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function estore_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php estore_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);
				
				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
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
