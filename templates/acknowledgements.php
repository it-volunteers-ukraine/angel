<?php
/*
Template Name: Acknowledgements
*/
get_header();
?>

<!-- <main class="gratitudes">
    <section class="gratitudes__section section">
        <div class="container">
            <div class="gratitudes__content">
                <h2 class="page-title title-h2"><?php the_field('gratitudes_title'); ?></h2>
                <p><?php the_field('gratitudes_text'); ?></p>
                <div class="gratitudes__content__cards">
                    <?php
                    if( have_rows('gratitudes') ):
                        while( have_rows('gratitudes') ) : the_row();

                            $gratitudeImg = get_sub_field('gratitude_img');
                            $gratitudeDate = get_sub_field('gratitude_date');
                            $gratitudeInfo = get_sub_field('gratitude_info');
                            
                            ?>
                            <div class="card">
                                <div class="card__img">
                                    <?php 
                                    if( !empty( $gratitudeImg ) ): ?>
                                        <a data-fslightbox="gallery" href="<?php echo esc_url($gratitudeImg['url']); ?>">
                                            <img src="<?php echo esc_url($gratitudeImg['url']); ?>" alt="<?php echo esc_attr($gratitudeImg['alt']); ?>"/>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <p><?php echo($gratitudeDate); ?></p>
                                <p><?php echo($gratitudeInfo); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                
                
            </div>
        </div>
    </section>
</main> -->

<main class="gratitudes">
    <section class="gratitudes__section section">
        <div class="container">
            <div class="gratitudes__content">
                <h2 class="page-title title-h2"><?php the_field('gratitudes_title'); ?></h2>
                <p><?php the_field('gratitudes_text'); ?></p>
                <div class="gratitudes__content__cards">
                
                    <?php
                    
                    // Визначаємо кількість постів на сторінці залежно від ширини екрану
                    if (wp_is_mobile()) {
                        $posts_per_page = 3; // на мобільних пристроях відображається 3 карточки
                    } elseif (wp_is_mobile() || $_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'],'Tablet')!==false) {
                        $posts_per_page = 6; // на планшетах відображається 6 карточок
                    } elseif (wp_is_mobile() || $_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'],'Mobile')!==false) {
                        $posts_per_page = 6; // на мобільних пристроях відображається 6 карточок
                    } else {
                        $posts_per_page = 8; // на екранах більше 1440 відображається 8 карточок
                    }

                    // Визначаємо поточну сторінку
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    // Визначаємо аргументи для запиту
                    $args = array(
                        'post_type'      => 'post', // замініть на ваш тип запису
                        'posts_per_page' => $posts_per_page,
                        'paged'          => $paged
                    );

                    // Виконуємо запит
                    $gratitudes_query = new WP_Query( $args );

                    if ( $gratitudes_query-> have_rows('acknowledgements') ) :
                        while ( $gratitudes_query->have_rows('acknowledgements') ) : $gratitudes_query->the_row();

                            $gratitudeImg = get_sub_field('acknowledgement_img');
                            $gratitudeDate = get_sub_field('acknowledgement_date');
                            $gratitudeInfo = get_sub_field('acknowledgement_info');

                            ?>
                            <div class="card">
                                <div class="card__img">
                                <?php 
                                    if( !empty( $gratitudeImg ) ): ?>
                                        <a data-fslightbox="gallery" href="<?php echo esc_url($gratitudeImg['url']); ?>">
                                            <img src="<?php echo esc_url($gratitudeImg['url']); ?>" alt="<?php echo esc_attr($gratitudeImg['alt']); ?>"/>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <p><?php echo($gratitudeDate); ?></p>
                                <p><?php echo($gratitudeInfo); ?></p>
                            </div>
                        <?php endwhile; ?>

                        <!-- Додамо пагінацію  -->
                        <div class="pagination">
                            <?php echo paginate_links( array(
                                'total' => $gratitudes_query->max_num_pages
                            ) ); ?>
                        </div>
                        <!-- /Додамо пагінацію -->

                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>  







<?php get_footer(); ?>

