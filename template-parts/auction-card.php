<?php
    $product = isset($args['product']) ? $args['product'] : null;
    $isSliderCard = isset($args['isSliderCard']) ? $args['isSliderCard'] : false;
    
if ($product) : ?>

    <li class="product <?php echo $isSliderCard? "swiper-slide": ""?>"<?php wc_product_class(); ?>>
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
                $auction_start_price = get_post_meta( get_the_ID(), '_auction_start_price', true );                                       
                echo '<p>Поточна ставка: ' . $auction_start_price . '</p>';                                       
                echo '</div>';
                echo '<div class="auction-time">';
                woocommerce_auction_countdown();
                echo '</div>'; 
                echo '<button class="product__button primary-button">' . esc_html( get_field('auction-details', 'option') ) . '</button>';
            echo '</div>';                                
        echo '</a>';
        ?>
    </li>
    
<?php endif; ?>