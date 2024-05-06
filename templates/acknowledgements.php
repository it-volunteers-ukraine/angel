<?php
/*
Template Name: Acknowledgements
*/
get_header();
?>

<main class="acknowledgements">
    <section class="acknowledgements__section section">
        <div class="container">
            <div class="acknowledgements__content">
                <h2 class="page-title title-h2"><?php the_field('acknowledgements_title'); ?></h2>
                <p><?php the_field('acknowledgements_text'); ?></p>
                <div class="acknowledgements__content__cards">
                    <?php
                        $screenWidth = wp_is_mobile() ? 576 : 1441; 

                        if ($screenWidth >= 1441) {
                            $postsPerPage = 8;
                        } elseif ($screenWidth >= 576) {
                            $postsPerPage = 6;
                        } else {
                            $postsPerPage = 3;
                        }
                   
                        $args = array(
                            'post_type' => 'acknowledgements',
                            'posts_per_page' => $postsPerPage,
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                            'order' => 'ASC'
                        );

                        $custom_posts = new WP_Query($args);
                        $total_pages  = $custom_posts->max_num_pages; 
                        $current_page = max( 1, get_query_var( 'paged' ) );

                        if ($custom_posts->have_posts()) :
                            while ($custom_posts->have_posts()) :
                                $custom_posts->the_post();
                                
                                $acknowledgementImg = get_field('acknowledgement_img');
                                $acknowledgementDate = get_field('acknowledgement_date');
                                $acknowledgementInfo = get_field('acknowledgement_info');

                                ?>
                                    <div class="card">
                                        <div class="card__img">
                                            <?php if (!empty($acknowledgementImg)) : ?>
                                                <a data-fslightbox="gallery" href="<?php echo esc_url($acknowledgementImg['url']); ?>">
                                                    <img src="<?php echo esc_url($acknowledgementImg['url']); ?>" alt="<?php echo esc_attr($acknowledgementImg['alt']); ?>"/>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <p class="card__date"><?php echo($acknowledgementDate); ?></p>
                                        <p class="card__info"><?php echo($acknowledgementInfo); ?></p>
                                    </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'No acknowledgements';
                        endif;
                    ?>
                    
                </div>
            </div>
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
        </div>
    </section>
</main>  

<?php get_footer(); ?>

