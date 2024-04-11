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

        <?php get_template_part('template-parts/about-fund-section'); ?>

        <?php  if (get_field( 'about_fund_btn_text' )) {?>
        <a href=<?php the_field("about_fund_btn_link")?> class="tertiary-button about-funb-btn">
            <?php the_field("about_fund_btn_text")?></a>
        <?php } ?>

    </section>

    <section class="directions section">
        <div class="container">
            <?php  if (get_field( 'directions_title')) {?>
            <h2 class="title-h2">
                <?php the_field("directions_title")?>
            </h2>
            <?php } ?>

            <div class="directions-container">
                <?php
            $directionsList = get_field('derections_list');
            if ($directionsList) { 
            ?>
                <ul class="directions-cards">
                    <?php 
                    $counter = 0;
                    foreach ($directionsList as $directionsItem): 
                    $title = $directionsItem['title']; 
                    $text = $directionsItem['text']; 
                    $btnText = $directionsItem['btn_text']; 
                    $btnLink = $directionsItem['btn_link']; 
                    ?>
                    <li class="directions-card <?php echo $counter === 0 ? "active": ""?>">
                        <div class="decor">
                            <img src="<?php echo get_template_directory_uri() ?>/src/images/decor.png" alt="decor">
                        </div>
                        <div class="title-wrapper">
                            <div class="arrow-wrapper">
                                <svg width="44" height="44" class="arrow">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-arrow">
                                    </use>
                                </svg>
                                <svg width="24" height="24" class="arrow-small">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-arrow-small">
                                    </use>
                                </svg>
                            </div>

                            <p class="title"><?php echo $title; ?></p>
                        </div>
                        <div class="extra-content">
                            <?php echo $text; ?>
                            <a href="<?php echo $btnlink; ?>" class="secondary-button"><?php echo $btnText; ?></a>
                        </div>
                    </li>
                    <?php
                    $counter ++;
                    endforeach ?>
                </ul>

                <ul class="directions-images-wrapper">
                    <?php
                    $counter = 0;
                     foreach ($directionsList as $directionsItem): 
                    $image = $directionsItem['image']; 
                    ?>
                    <li class="image-wrapper <?php echo $counter === 0 ? "active": ""?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </li>
                    <?php
                    $counter ++;
                     endforeach ?>
                </ul>
                <?php
            }?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>