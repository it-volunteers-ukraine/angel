<?php
/*
Template Name: Individual help
*/
get_header();
?>

<main>   
    <section class="section individual-help"> 
        <div class="container">
            <?php  if (get_field( 'first_title' )) {?>
                <h2 class="page-title title-h2"><?php the_field("first_title")?></h2>
            <?php } ?>
            <div class="individual-help-info">
                <div class="help-image-wrapper">
                    <?php  if (get_field( 'help_image' )) {?>
                    <img class="help-image" src="<?php echo esc_url( get_field( 'help_image' )['url'] ); ?>"
                        alt="<?php echo esc_attr( get_field( 'help_image' )['alt'] ); ?>" />
                    <?php } ?>
                </div>
                <div class="help-text">
                    <?php  if (get_field( 'help_text' )) {?>
                        
                            <?php the_field("help_text")?>
                        
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section need-help">
        <div class="container">
            <?php  if (get_field( 'second_title' )) {?>
                <h2 class="page-title title-h2"><?php the_field("second_title")?></h2>
            <?php } ?>
            <p class="title-h5 second-text ">
                <?php  if (get_field( 'second_text' )) {?>
                    
                        <?php the_field("second_text")?>
                    
                <?php } ?>
            </p>

            <div class="form-and-contact-container">
             <!--  ============= form =============  -->
                <div class="contact-form">
                    <h3 class="title-h3 form-title">
                        <?php  if (get_field( 'form_titile' )) {?>
                            <?php the_field('form_titile')?>
                        <?php } ?>
                    </h3>
                    <?php
                        $formShortcode = get_field('form_shortcode');
                        if ($formShortcode): ?>

                        <?php echo do_shortcode($formShortcode); ?>
                    <?php endif; ?>
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
            </div>
        </div>
        
    </section>
</main>




<?php get_footer(); ?>