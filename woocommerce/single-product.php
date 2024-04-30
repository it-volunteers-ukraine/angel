<?php
/**
 * The Template for displaying single product
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

get_header(); ?>
<main class="lot">   
    <section class="lot__section section"> 
        <div class="container">
            <div class="lot__container section">                            
                <div class="lot__body">
				<?php					
					//do_action( 'woocommerce_before_main_content' );
					do_action( 'woocommerce_shop_loop_item_title' );
					 			
					while ( have_posts() ) : the_post();

						echo '<div class="lot__info">';  
							echo '<div class="lot__image">';
                    	    	the_post_thumbnail('medium');
                    		echo '</div>';
                    		echo '<div class="lot__description">';
                    			the_content();
								echo '<div class="lot__summary">';
								do_action( 'woocommerce_single_product_summary' );
								echo '</div>';
                    		echo '</div>'; 
                        echo '</div>';

					endwhile;				
				?>
				</div>
			</div>
		</div>
	</section>
</main>	
<?php get_footer(); ?>
