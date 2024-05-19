<div class="container">
    <div class="auctions__container section">
        <h2 class="page-title title-h2"><?php the_field('charity_auction_title', 'option'); ?></h2>
        <div class="auctions__body">
            <?php
                // Отримання аргументів, переданих до шаблону
                $category = isset($args['category']) ? $args['category'] : '';

                // Налаштування WP_Query
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 6, 
                    'category_name'  => $category, 
                    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                );

                $products = new WP_Query($args);

                if ($products->have_posts()) : ?>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php while ($products->have_posts()) : $products->the_post(); ?>
                                <div class="swiper-slide">
                                    <?php get_template_part('template-parts/auction-card'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            
        </div>
    </div>
</div>