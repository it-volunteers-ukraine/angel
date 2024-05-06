<?php
/*
Template Name: Artist information
*/
get_header();
?>

<main class="artist-information">
    <section class="artist section">
        <div class="container">
            <div class="artist__content content">
                <!-- Заголовок з текстом -->
                <div class="artist__first-text first-text">
                    <h2 class="section-title title-h2 artist__title title"><?php the_field('artist_title'); ?></h2>
                    <p class="artist__text text primary"><?php the_field('artist_1p'); ?></p>
                </div>
                <!-- Блок з текстом -->
                <div class="artist__second-text second-text">
                    <p class="artist__text text secondary"><?php the_field('artist_2p'); ?></p>
                    <p class="artist__text text secondary"><?php the_field('artist_3p'); ?></p>
                </div>
                <!-- Зображення -->
                <div class="artist__img img">
                    <?php 
                    $image = get_field('artist_image');
                    if( !empty( $image ) ): ?>
                        <img class="shifted-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="apostle section">
        <div class="container">
            <div class="apostle__content content">
                <!-- Заголовок з текстом -->
                <div class="apostle__first-text first-text">
                    <h2 class="section-title title-h2 apostle__title title"><?php the_field('apostle_title'); ?></h2>
                    <p class="apostle__text text primary"><?php the_field('apostle_1p'); ?></p>
                </div>
                <!-- Блок з текстом -->
                <div class="apostle__second-text second-text">
                    <p class="apostle__text text secondary"><?php the_field('apostle_2p'); ?></p>
                    <p class="apostle__text text secondary"><?php the_field('apostle_3p'); ?></p>
                </div>
                <!-- Зображення -->
                <div class="apostle__img img">
                    <?php 
                    $image = get_field('apostle_image');
                    if( !empty( $image ) ): ?>
                        <img class="scaled-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="prayer section">
        <div class="container">
            <div class="prayer__content content">
                <!-- Заголовок з текстом -->
                <div class="prayer__first-text first-text">
                    <h2 class="section-title title-h2 prayer__title title"><?php the_field('prayer_title'); ?></h2>
                    <p class="prayer__text text primary"><?php the_field('prayer_1p'); ?></p>
                </div>
                <!-- Блок з текстом -->
                <div class="prayer__second-text second-text">
                    <p class="prayer__text text secondary"><?php the_field('prayer_2p'); ?></p>
                </div>
                <!-- Зображення -->
                <div class="prayer__img img">
                    <?php 
                    $image = get_field('prayer_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>