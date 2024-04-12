<?php
$card = $args['card'];
$photo = $card['contact_person_photo'];
$isSliderCard = $args['isSliderCard'] ?? false; 
?>

<li class="contact-person-card <?php echo( $isSliderCard ? 'swiper-slide' : '' ); ?>">
    <div class="photo-wrapper">
        <img src="<?php echo esc_url($photo['url'] ); ?>" alt="<?php echo esc_url($photo['alt'] ); ?>">
    </div>
    <p class="full-name title-h5"><?php echo $card['contact_person_name']; ?></p>
    <p class="position title-h6"><?php echo $card['position']; ?></p>
    <p class="about-person-text"><?php echo $card['contact_person_about_text']; ?></p>
    <h3 class="contacts-title"><?php echo $card['contact_person_contacts_title']; ?></h3>
    <div class="contacts-item">
        <a class="contacts-link" href="mailto:<?php echo $card['contact_person_email']; ?>"
                                target="_blank">
            <span class="contact-icon"> 
                <svg width="18.78" height="15.09">
                    <use class="icon" href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-envelope"></use>
                </svg>
            </span>
            <p><?php echo $card['contact_person_email']; ?></p>
        </a>
    </div>
    <div class="contacts-item">
        <a class="contacts-link" href="tel:<?php echo $card['contact_person_phone_number']; ?>"
                                target="_blank">
            <span class="contact-icon"> 
                <svg width="18.5" height="18.5">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-phone"></use>
                </svg>
            </span>
            <p><?php echo $card['contact_person_phone_number']; ?></p>
        </a>
    </div>
    <div class="contacts-item">
        <div class="contacts-link">
            <span class="contact-icon"> 
                <svg width="18.5" height="18.5">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-clock"></use>
                </svg>
            </span>
            <p><?php echo $card['contact_person_work_hours']; ?></p>
        </div>
    </div>

</li>