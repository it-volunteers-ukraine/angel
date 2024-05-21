<section class="auction section">
    <div class="container">
        <h2 class="page-title title-h2"><?php the_field('charity_auction_title', 'option')?></h2>
        <!-- Слайдер -->
        <div class="auction-slider swiper-container">
            <ul class="auction-slider__wrapper swiper-wrapper">
                <?php 
                $category = $args["category"];
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 6, 
                    'category_name' => $category, 
                    'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
                );
                
                $products = new WP_Query( $args );
                $total_pages  = $products->max_num_pages;
                $current_page = max( 1, get_query_var( 'paged' ) );                    

                if ( $products->have_posts() ) {
                    while ( $products->have_posts() ) {
                        $products->the_post();
                        $product = wc_get_product( get_the_ID() ); // Отримуємо об'єкт продукту

                        if ( !$product ) {
                            continue; // Пропускаємо ітерацію, якщо об'єкт продукту не вдалося отримати
                        }
                        ?>
                        
                            <li class="product swiper-slide"<?php wc_product_class(); ?>>
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
                                        echo '<button class="product__button primary-button">' . esc_html( get_field('projects-btn-support', 'option') ) . '</button>';
                                    echo '</div>';                                
                                echo '</a>';
                                ?>
                            </li>
                        
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="navigation-buttons">
                <svg class="button-arrow button-next" width="40" height="40">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-slider-arrow">
                    </use>
                </svg>
                <svg class="button-arrow button-prev" width="40" height="40">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-slider-arrow">
                    </use>
                </svg>
            </div>
        </div> 
        <div class="btn-seemore"></div>  
    </div>
</section>