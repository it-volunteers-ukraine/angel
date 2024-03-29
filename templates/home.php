<?php
/*
Template Name: home
*/
get_header();
?>
<main>
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-image-wrapper">
                <?php  if (get_field( 'hero_image' )) {?>
                <img class="hero-image" src="<?php echo esc_url( get_field( 'hero_image' )['url'] ); ?>"
                    alt="<?php echo esc_attr( get_field( 'hero_image' )['alt'] ); ?>" />
                <?php } ?>
            </div>
            <div class="hero-text-wrapper">
                <?php  if (get_field( 'hero_sub_title' )) {?>
                <h2 class="hero-sub-title">
                    <?php the_field("hero_sub_title")?>
                </h2>
                <?php } ?>
                <?php  if (get_field( 'hero_main_title' )) {?>
                <h1 class="title-h1">
                    <?php the_field("hero_main_title")?>
                </h1>
                <?php } ?>
                <?php  if (get_field( 'hero_text' )) {?>
                <div class="hero-text">
                    <?php the_field("hero_text")?>
                </div>
                <?php } ?>
                <?php  if (get_field( 'hero_btn_text' )) {?>
                <a href=<?php the_field("hero_btn_link")?>
                    class="primary-button hero-btn"><?php the_field("hero_btn_text")?></a>
                <?php } ?>
            </div>
        </div>
    </section>
</main>



<?php get_footer(); ?>