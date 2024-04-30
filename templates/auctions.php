<?php
/*
Template Name: auctions
*/
get_header();
defined( 'ABSPATH' ) || exit;
global $product;
?>
<main class="auctions">   
    <section class="auctions__section section"> 
        <div class="container">
            <div class="auctions__container section">
                <h2 class="page-title title-h2"><?php the_field('auctions-title'); ?></h2>
                <p class="auctions__description"><?php the_field('auctions-description'); ?></p>
                <div class="auctions__body">
                    <?php $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 6, 
                        'product_cat'    => 'auction', 
                        'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
                    );
                    
                    $products = new WP_Query( $args );
                    $total_pages  = $products->max_num_pages;
                    $current_page = max( 1, get_query_var( 'paged' ) );                    

                    if ( $products->have_posts() ) {
                        ?>
                        <ul class="auctions__products">
                        <?php    
                        while ( $products->have_posts() ) {
                            $products->the_post();
                            ?>
                            <li <?php wc_product_class(); ?>>
                                <?php

                                echo '<a class="product__link" href="' . esc_url( get_permalink() ) . '">';
                                    echo '<div class="product__img">';
                                        do_action( 'woocommerce_before_shop_loop_item_title' );
                                    echo '</div>';
                                    echo '<div class="product__info">';                                    
                                        do_action( 'woocommerce_shop_loop_item_title' );
                                        echo '<div class="product__description">';
                                            echo apply_filters( 'the_content', $product->get_description() );
                                        echo '</div>';  

                                        echo '<div class="auction__price">';
                                        $auction_start_price= get_post_meta( get_the_ID(), '_auction_start_price', true );                                       
                                        echo '<p>Поточна ставка: ' . $auction_start_price . '</p>';                                       
                                        echo '</div>';
                                       
                                        echo '<div class="auction-time">';
                                        woocommerce_auction_countdown( array( 'show_labels' => false ) );
                                        echo '</div>';


                                        echo '<button class="product__button primary-button">' . esc_html( get_field('projects-btn-support', 'option') ) . '</button>';
                                    echo '</div>';                                
                                echo '</a>';
                                ?>
                            </li>
                            <?php
                        }
                        ?>
                        </ul>
                        <?php   
                        wp_reset_postdata();
                    }

                    if ($total_pages > 1) {
                        ?>
                        <div class="pagination">
                            <?php
                            echo paginate_links( [
                                'base'      => get_pagenum_link( 1 ) . '%_%',
                                'format'    => '/page/%#%',
                                'current'   => $current_page,
                                'total'     => $total_pages,
                                'prev_next' => false,
                                'show_all'  => $total_pages <= 5,
                                'end_size'  => 1,
                                'mid_size'  => ( $current_page === 1 ) || ( $current_page == $total_pages ) ? 3 : 1,
                            ] );
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>    
        </div>
    </section>    
</main>
<?php get_footer(); ?>
