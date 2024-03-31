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
                <h3 class="hero-sub-title">
                    <?php the_field("hero_sub_title")?>
                </h3>
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
    <section class="about-fund section">
        <div class="container">
            <?php  if (get_field( 'about_fund_title' )) {?>
            <h2 class="title-h2">
                <?php the_field("about_fund_title")?>
            </h2>
            <?php } ?>

            <div class="info-wrapper">
                <?php  if (get_field( 'about_fund_main_info' )) {?>
                <div class="main-info">
                    <?php the_field("about_fund_main_info")?>
                </div>
                <?php } ?>

                <?php  if (get_field( 'about_fund_image' )) {?>
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_field( 'about_fund_image' )['url'] ); ?>"
                        alt="<?php echo esc_attr( get_field( 'about_fund_image' )['alt'] ); ?>" />
                </div>
                <?php } ?>

                <?php  if (get_field( 'about_fund_sub_info' )) {?>
                <div class="sub-info">
                    <?php the_field("about_fund_sub_info")?>
                </div>
                <?php } ?>
            </div>
            <div class="advantages-wrapper">
                <?php  if (get_field( 'advantages_text' )) {?>
                <div class="advantages-text">
                    <?php the_field("advantages_text")?>
                </div>
                <?php } ?>

                <ul class="advantages-cards">
                    <?php if (have_rows('advantages_cards')): ?>
                    <?php while ( have_rows( 'advantages_cards' ) ): the_row(); ?>
                    <?php get_template_part('template-parts/advantages-card'); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

                <?php  if (get_field( 'about_fund_btn_text' )) {?>
                <a href=<?php the_field("about_fund_btn_link")?>
                    class="tertiary-button"><?php the_field("about_fund_btn_text")?></a>
                <?php } ?>
            </div>
        </div>

    </section>
</main>

<?php get_footer(); ?>