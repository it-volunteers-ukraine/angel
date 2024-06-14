<?php
$title = get_field( 'about_fund_title', 'option' );
$mainInfo = get_field( 'about_fund_main_info', 'option' );
$image   = get_field( 'about_fund_image', 'option' );
$subInfo = get_field( 'about_fund_sub_info', 'option' ); 
$advantagesText = get_field( 'advantages_text', 'option' );
$advantagesCards = get_field( 'advantages_cards', 'option' )
?>

<div class="container">
    <?php  if ($title) {?>
    <h2 class="title-h2">
        <?php echo $title; ?>
    </h2>
    <?php } ?>

    <div class="info-wrapper">
        <?php  if ($mainInfo) {?>
        <div class="main-info">
            <?php echo $mainInfo?>
        </div>
        <?php } ?>

        <?php  if ($image) {?>
        <div class="image-wrapper">
            <img src="<?php echo esc_url($image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        </div>
        <?php } ?>

        <?php  if ($subInfo) {?>
        <div class="sub-info">
            <?php echo $subInfo ?>
            <div class="about-heading-icon-wrapper">
                <svg class="about-heading-icon" width="13.82" height="8">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-arrow">
                    </use>
                </svg>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="advantages-wrapper">
        <?php  if ($advantagesText) {?>
        <div class="advantages-text">
            <?php echo $advantagesText?>
        </div>
        <?php } ?>

        <?php if( $advantagesCards ) {
            echo '<ul class="advantages-cards">';
            foreach( $advantagesCards as $advantagesCard ) {
                get_template_part('template-parts/advantages-card', null, array('card' => $advantagesCard));
            }
            echo '</ul>';
        } ?>

        <div class="swiper advantages-container">
            <?php if( $advantagesCards ) {
                echo '<ul class="swiper-wrapper">';
                foreach( $advantagesCards as $advantagesCard ) {
                    get_template_part('template-parts/advantages-card', null, array('isSliderCard' => true, 'card' => $advantagesCard));
                }
                echo '</ul>';
            } ?>

            <div class="swiper-pagination"></div>

        </div>

    </div>
</div>