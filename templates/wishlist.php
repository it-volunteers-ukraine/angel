<?php
/*
Template Name: wishlist
*/
get_header();
defined( 'ABSPATH' ) || exit;
global $product;
?>
<main class="wishlist">   
    <section class="wishlist__section section"> 
        <div class="container">
            <div class="wishlist__container">
                <h2 class="page-title title-h2"><?php echo get_the_title() ?></h2>                
                <div class="wishlist__body">
                    <?php 
                    $category = $args["category"];
                    $args = array(
                        'post_type'      => 'product',                        
                        'category_name' => $category,                        
                    );                    
                    $products = new WP_Query( $args );                                     

                    if ( $products->have_posts() ) {
                        echo do_shortcode('[auctions_watchlist]');                        
                        wp_reset_postdata();                        
                    }
                    ?>
                </div>
            </div>    
        </div>
    </section>    
</main>
<?php get_footer(); ?>
