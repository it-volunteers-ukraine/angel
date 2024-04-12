<?php
$title = get_field( 'contact_persons_title', 'option' );
$contactPersonsCards = get_field( 'contact_persons_cards', 'option' )
?>

<div class="container">
    <?php  if ($title) {?>
    <h2 class="title-h2">
        <?php echo $title; ?>
    </h2>
    <?php } ?>


    <div class="contact-persons-wrapper">

        <?php if( $contactPersonsCards ) {
            echo '<ul class="contacts-persons-list">';
            foreach( $contactPersonsCards as $contactPersonCard ) {
                get_template_part('template-parts/contact-person-card', null, array('card' => $contactPersonCard));
            }
            echo '</ul>';
        } ?>

        <div class="">
            <div class="swiper swiper-contact-persons-container ">
                <?php if( $contactPersonsCards ) {
                    echo '<ul class="swiper-wrapper">';
                    foreach( $contactPersonsCards as $contactPersonCard ) {
                        get_template_part('template-parts/contact-person-card', null, array('isSliderCard' => true, 'card' => $contactPersonCard));
                    }
                    echo '</ul>';
                } ?>
                 <div class="swiper-pagination"></div>
            </div>
           
        </div>

    </div>
</div>