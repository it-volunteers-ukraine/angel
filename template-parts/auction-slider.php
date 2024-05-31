<section class="auction section">
    <div class="container">
        <h2 class="page-title title-h2"><?php the_field('charity_auction_title', 'option')?></h2>
        <!-- Slider Swiper -->
        <div class="auction-slider swiper-container">
            <ul class="auction-slider__wrapper swiper-wrapper">
            <?php 
                $category = isset($args["category"]) ? $args["category"] : '';
                $query_args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1, 
                    'category_name'  => $category, 
                );
                
                $products = new WP_Query($query_args);
                if ($products->have_posts()) {
                    while ($products->have_posts()) {
                        $products->the_post();
                        $product = wc_get_product(get_the_ID()); 
                        if (!$product) {
                            continue; 
                        }
                        get_template_part('template-parts/auction-card', null, array('product' => $product, 'isSliderCard' => true));
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
        <div class="btn-wrapper">
            <?php 
            $link = get_field('see_more_link', 'option');
            if( $link ): 
                $link_url = $link['url'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a 
                    class="tertiary-button see-more-btn" 
                    href="<?php echo esc_url( $link_url ); ?>" 
                    target="<?php echo esc_attr( $link_target ); ?>">
                    <?php the_field('see_more_title', 'option'); ?>
                </a>
            <?php endif; ?>  
        </div>  
    </div>
</section>