<?php
/*
Template Name: Benefactors
*/
get_header();
?>
<main>   
    <section class="section benefactors-top"> 
        <div class="container">
            <?php  if (get_field( "first_title" )) {?>
                <h2 class="page-title title-h2"><?php the_field("first_title")?></h2>
            <?php } ?>
            <?php  if (get_field( "top_text" )) {?>
                    <p class="title-h5 top-text"> <?php the_field("top_text")?></p>
            <?php } ?>
            <div class="image-form-wrapper">
                <div class="image-wrapper">
                    <?php  if (get_field( 'benefactors_image' )) {?>
                        <img src="<?php echo esc_url( get_field( 'benefactors_image' )['url'] ); ?>"
                            alt="<?php echo esc_attr( get_field( 'benefactors_image' )['alt'] ); ?>" />
                    <?php } ?>
                </div>
                 <!--  ============= form =============  -->
                <div class="contact-form">
                    <?php
                        $formShortcode = get_field('form_shortcode');
                        if ($formShortcode): ?>

                        <?php echo do_shortcode($formShortcode); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section benefactors-fundraising"> 
        <div class="container">
            <?php  if (get_field( "second_title" )) {?>
                <h2 class="page-title title-h2"><?php the_field("second_title")?></h2>
            <?php } ?>

            <div class="fundraising">
                <div class="fundraising-text">
                    <?php  if (get_field( "top_text_second" )) {?>
                        <p class="title-h5 top-text-fundraising"> <?php the_field("top_text_second")?></p>
                    <?php } ?>
                    <?php  if (get_field( "bottom_text" )) {?>
                        <div class="bottom-text-fundraising"> <?php the_field("bottom_text")?></div>
                    <?php } ?>
                    <div class="fundraising-payment-details">
                        <?php if( have_rows('payment_details') ): ?>
                            <?php while( have_rows('payment_details') ): the_row();?>

                                <div class="payment-detail"> 
                                    <span><?php the_sub_field("payee_field_name")?></span>
                                    <p class="title-h6"> <?php the_sub_field("payee_field_value")?></p>
                                </div>
                                <div class="payment-detail"> 
                                    <span><?php the_sub_field("receiver_code_name")?></span>
                                    <p class="title-h6"> <?php the_sub_field("receiver_code_value")?></p>
                                </div>
                                <div class="payment-detail"> 
                                    <span><?php the_sub_field("bank_field_name")?></span>
                                    <p class="title-h6"> <?php the_sub_field("bank_field_value")?></p>
                                </div>
                                <div class="payment-detail"> 
                                    <span><?php the_sub_field("account_number_field_name")?></span>
                                    <p class="title-h6"> <?php the_sub_field("account_number_field_value")?></p>
                                </div>
                                <div class="payment-detail"> 
                                    <span><?php the_sub_field("currency_field_name")?></span>
                                    <p class="title-h6"> <?php the_sub_field("currency_field_value")?></p>
                                </div>
                                <div class="payment-detail"> 
                                    <span><?php the_sub_field("payment_purpose_field_name")?></span>
                                    <p class="title-h6"> <?php the_sub_field("payment_purpose_field_value")?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    </div>
                </div>
                <!--  ============= contact person card =============  -->
                <div class="contact-person-card">
                    <div class="photo-wrapper">
                        <img src="<?php echo esc_url( get_field( 'representative_photo' )['url'] ); ?>" alt="<?php echo esc_attr( get_field( 'representative_photo' )['alt'] ); ?>">
                    </div>
                    <div class="info-wrapper">
                       <div class="name-position-container">
                            <p class="full-name title-h5"><?php the_field("representative_name"); ?></p>
                            <p class="position title-h6"><?php the_field("position"); ?></p>
                       </div>
                        <p class="about-person-text"><?php the_field ("representative_text"); ?></p>
                        <h3 class="contacts-title"><?php the_field ("representative_contacts_title"); ?></h3>
                        <div class="contacts-item">
                            <a class="contacts-link" href="mailto:<?php the_field ("representative_email"); ?>"
                                                    target="_blank">
                                <span class="contact-icon"> 
                                    <svg width="18.78" height="15.09">
                                        <use class="icon" href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-envelope"></use>
                                    </svg>
                                </span>
                                <p><?php the_field ("representative_email"); ?></p>
                            </a>
                        </div>
                        <div class="contacts-item">
                            <a class="contacts-link" href="tel:<?php the_field ("representative_phone"); ?>"
                                                    target="_blank">
                                <span class="contact-icon"> 
                                    <svg width="18.5" height="18.5">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-phone"></use>
                                    </svg>
                                </span>
                                <p><?php the_field ("representative_phone"); ?></p>
                            </a>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-link">
                                <span class="contact-icon"> 
                                    <svg width="18.5" height="18.5">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-clock"></use>
                                    </svg>
                                </span>
                                <p><?php the_field ("representative_work_hours"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--  ============= depositing-funds =============  -->
                <div class="fundraising-methods">
                    <?php get_template_part('template-parts/depositing-funds'); ?>
                </div>
            </div>

        </div>

    </section>
    
    <?php get_template_part('template-parts/partners-slider'); ?>

    <section class="section benefactors_projects">
        <?php get_template_part('template-parts/projects-slider',); ?>
    </section>

</main>



<?php get_footer(); ?>