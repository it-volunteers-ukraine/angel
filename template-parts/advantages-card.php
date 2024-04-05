<?php
$card = $args['card'];
$icon = $card['icon'];
$isSliderCard = $args['isSliderCard'] ?? false; 
?>

<li class="card <?php echo( $isSliderCard ? 'swiper-slide' : '' ); ?>">
    <svg>
        <use
            href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#<?php echo esc_attr( $icon['alt'] ); ?>">
        </use>
    </svg>
    <p class="counter"><?php echo $card['сounter']; ?></p>
    <p class="description"><?php echo $card['description']; ?></p>

</li>