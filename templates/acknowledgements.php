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
                <?php get_template_part( 'template-parts/loader' ); ?>
                <div class="acknowledgements__content__cards">
                
                </div>
                <div class="pagination">
                    
                </div>   
            </div>
        </div>
        <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__close">
                    <a href=""></a>
                </div>
                
                <?php
                    $acknowledgementImg = get_field('acknowledgement_img');
                ?>
                <div class="card__img">
                    <?php if (!empty($acknowledgementImg)) : ?>
                        <a href="<?php echo esc_url($acknowledgementImg['url']); ?>">
                            <img src="<?php echo esc_url($acknowledgementImg['url']); ?>" alt="<?php echo esc_attr($acknowledgementImg['alt']); ?>"/>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </section>
    
</main>  


<?php get_footer(); ?>