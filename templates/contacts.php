<?php
/*
Template Name: Contacts
*/
get_header();
?>

<main class="contacts">
    <section class="contact-us section">
        <div class="container">
            <div class="contact-us__content">
                <!-- Зображення -->
                <div class="contact-us__img">
                    <?php 
                    $image = get_field('contact_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
                <!-- Заголовок з текстом -->
                <div class="contact-us__text">
                    <h2 class="page-title title-h2 contact-us__title"><?php the_field('contact_title'); ?></h2>
                    <p><?php the_field('contact_text'); ?></p>
                </div>
                <!-- Блок з інформацією -->
                <div class="contact-us__info">
                    <!-- Наша адреса -->
                    <div class="info__block">
                        <h5 class="title-h5"><?php the_field('our_address_title'); ?></h5>
                        <div class="info__item">
                            <a class="info__link" href="<?php the_field('address_google_link', 'options' ); ?>" target="_blank">
                                <span class="info__icon">
                                    <svg width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-location"></use>
                                    </svg>
                                </span>
                                <p class="info__link-item short"><?php the_field('address', 'options' ); ?></p>
                            </a>
                        </div>
                    </div>
                    <!-- Графік роботи -->
                    <div class="info__block">
                        <h5 class="title-h5"><?php the_field('work_schedule_title'); ?></h5>
                        <div class="info__item">
                            <div class="info__link" >
                                <span class="info__icon">
                                    <svg width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-clock"></use>
                                    </svg>
                                </span>
                                <p><?php the_field('work_hours', 'options' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Котакти для зв'язку -->
                    <div class="info__block">
                        <h5 class="title-h5"><?php the_field('contacts_for_communication_title'); ?></h5>
                        <div class="info__item">
                            <a class="info__link" href="mailto:<?php the_field( 'email', 'option' ); ?>" target="_blank">
                                <span class="info__icon">
                                    <svg width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-envelope"></use>
                                    </svg>
                                </span>
                                <p class="info__link-item"><?php the_field( 'email', 'option' ); ?></p>
                            </a>
                        </div>
                        <div class="info__item-tel">
                            <div class="info__link">
                                <span class="info__icon">
                                    <svg width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-phone"></use>
                                    </svg>
                                </span>
                                <div>
                                    <a href="tel:<?php the_field( 'phone_number_1' ); ?>" target="_blank">
                                        <p class="info__link-item">
                                            <span><?php the_field( 'phone_number_1' ); ?></span>
                                        </p>
                                    </a>
                                    <a href="tel:<?php the_field( 'phone_number_2' ); ?>" target="_blank">
                                        <p class="info__link-item">
                                            <span><?php the_field( 'phone_number_2' ); ?></span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact__persons section">
        <?php get_template_part('template-parts/contact-persons-section'); ?>
    </section>
</main>


<?php get_footer(); ?>