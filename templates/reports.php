<?php
/*
Template Name: reports
*/
get_header();
?>
<main>   
    <section class="section docs"> 
        <div class="container">
            <?php  if (get_field( 'first_title' )) {?>
                <h2 class="page-title title-h2"><?php the_field("first_title")?></h2>
            <?php } ?>
            
            <?php  if (get_field( 'first_title_text' )) {?>
                <p class="first-title-text"><?php the_field("first_title_text")?></p>
            <?php } ?>
        
            <?php 
            $images = get_field('documents_gallery');
            if( $images ): ?>
                <ul class="docs-gallery-list">
                    <?php foreach( $images as $image ): ?>
                        <li class="docs-gallery-item">
                            <a class="docs-gallery-link" href="<?php echo esc_url($image['url']); ?>" data-lightbox="docs-gallery">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- documents-swiper for mobile -->
            <div class="swiper documents-swiper">
            <?php if( $images ): ?>
                <ul class="swiper-wrapper">
                    <?php foreach( $images as $image ): ?>
                        <li class="docs-gallery-item swiper-slide">
                            <a class="docs-gallery-link" href="<?php echo esc_url($image['url']); ?>" data-lightbox="docs-gallery-mob">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="swiper-pagination"></div>
            <?php endif; ?>

        </div>
        </div>
    </section>
    <section class="section reports">
        <div class="container">
            <?php  if (get_field( 'second_title' )) {?>
                <h2 class="page-title title-h2"><?php the_field("second_title")?></h2>
            <?php } ?>
            <?php  if (get_field( 'second_title_text' )) {?>
                <p class="second-title-text "><?php the_field("second_title_text")?></p>
            <?php } ?>

            <!-- four post per page -->
            <div>
                <ul class="reports-list">
                    <?php
                        $args          = ( [
                            'fields'         => 'ids',
                            'posts_per_page' => 4,
                            'post_type'      => 'reports',
                            'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
                        ] );
                        $reports_query = new WP_Query( $args );
                        $total_pages   = $reports_query->max_num_pages;
                        $current_page  = max( 1, get_query_var( 'paged' ) );

                        if ( $reports_query->have_posts() ) {
                            while ( $reports_query->have_posts() ) {
                                $reports_query->the_post();
                                ?>    
                                <li class="report-image">
                                    <?php
                                        $image = get_field( 'image' );
                                        if ( $image ): ?>
                                            <div class="image-wrapper">
                                                

                                                    <a class="" href="<?php echo esc_url( $image['url'] ); ?>" data-lightbox="reports-four-el">
                                                        <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                            alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                    </a>
                                                
                                            </div>
                                        <?php endif; 
                                    ?>
                                </li>
                                <?php
                            }
                        }
                    ?>
                </ul>
            </div>
            <!-- three post per page -->
            <div>
                <ul class="reports-list-three-el">
                    <?php
                        $args          = ( [
                            'fields'         => 'ids',
                            'posts_per_page' => 3,
                            'post_type'      => 'reports',
                            'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
                        ] );
                        $reports_query = new WP_Query( $args );
                        $total_pages   = $reports_query->max_num_pages;
                        $current_page  = max( 1, get_query_var( 'paged' ) );

                        if ( $reports_query->have_posts() ) {
                            while ( $reports_query->have_posts() ) {
                                $reports_query->the_post();
                                ?>    
                                <li class="report-image">
                                    <?php
                                        $image = get_field( 'image' );
                                        if ( $image ): ?>
                                            <div class="image-wrapper">

                                                    <a class="" href="<?php echo esc_url( $image['url'] ); ?>" data-lightbox="reports-three-el">
                                                        <img src="<?php echo esc_url( $image['url'] ); ?>"
                                                            alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                    </a>
                                                
                                            </div>
                                        <?php endif; 
                                    ?>
                                </li>
                                <?php
                            }
                        }
                    ?>
                </ul>
            </div>

            <?php
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
    </section>



<?php get_footer(); ?>