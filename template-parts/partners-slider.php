<?php 
$title = get_field( 'partners_title', 'option');
$text = get_field( 'partners_text', 'option');
$partnersSlider = get_field( 'partners_logo_slider', 'option');
?>

<section class="partners section">
    <div class="container">
        <?php  if ($title) {?>
        <h2 class="title-h2">
            <?php echo $title?>
        </h2>
        <?php } ?>

        <?php  if ($text) {
                echo $text;
        } ?>

        <div class="swiper partners-swiper">
            <?php 
                 if( $partnersSlider ) {
                echo '<ul class="swiper-wrapper partners-cards">';
                foreach( $partnersSlider as $slide ) {
                    get_template_part('template-parts/partners-card', null, array('slide' => $slide));
                }
                echo '</ul>';
            } ?>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>