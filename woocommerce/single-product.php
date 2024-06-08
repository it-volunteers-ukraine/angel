<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<main class="lot">
    <section class="about section">
		<div class="container">
			<div class="lot__container">
				<?php 				
				/**
				 * woocommerce_before_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action( 'woocommerce_before_main_content' );

				echo '<div class="page-title title-h2">';
				the_title();
				echo '</div>';
			    ?>	

				<div class="shop-wishlist">				
					<a href="<?php the_field( 'wishlist-link', 'option' ); ?>" class="wishlist"></a>
					<?php echo do_shortcode('[auction_watchlist_count]'); ?>
				</div>

				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>

					<?php wc_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>				
		    </div>
			<div class="form__container">
				<div class="information">					
					<?php
					echo '<p class="price price__reserved">';					
            		$auction_reserved_price = get_post_meta( get_the_ID(), '_auction_reserved_price', true );
            		$currency = get_woocommerce_currency_symbol();                                       
            		echo '<span>' . get_field('reserved-price', 'option') . '</span><span class="amount">' . $auction_reserved_price . '</span><span class="amount">' . $currency . '</span>';
            		echo '</p>';
					?>
					<p class="description"><?php the_field( 'reserve-price-info', 'option' ); ?></p>
					<div class="share">
						<p class="share__text">Поділіться цим аукціоном у соціальних мережах:</p>
						<?php get_template_part('template-parts/share',); ?>	
					</div>
				</div>
				<div id="contactForm" name="lot-form" class="form" method="post">
              		<?php echo do_shortcode('[contact-form-7 id="cbb87ee" title="Форма для сторінки Лоту"]') ?>
				</div>
			</div>
			<div class="back"> 
				<a href="<?php the_field( 'back-auctions', 'option' ); ?>" class="tertiary-button"><?php the_field('back-name','option'); ?></a>    
			</div> 
		</div>
	</section>	
	<section class="project__slider section">
		<?php get_template_part('template-parts/projects-slider',); ?>	
	</section>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
</main>	
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
