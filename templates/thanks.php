<?php
/*
Template Name: Thanks
*/
get_header();
?>

<main class="gratitudes">
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
                                        <a href=""></a>
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
</main>



<?php get_footer(); ?>