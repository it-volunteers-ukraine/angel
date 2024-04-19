<?php
/*
Template Name: home
*/
get_header();
?>
<main class="home">
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
        <a href=<?php the_field("about_fund_btn_link")?> class="tertiary-button read-more-btn">
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
                    $button = $directionsItem['btn']; 
                    ?>
                    <li class="directions-card <?php echo $counter === 0 ? "active": ""?>">
                        <div class="decor">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/decor.png" alt="decor">
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

                            <?php  
                            if ($button) {?>
                            <a href=<?php echo $button['link']?> class="secondary-button">
                                <?php echo $button['text']?></a>
                            <?php } ?>
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

    <section class="projects section">
        <div class="container">
            <?php  if (get_field( 'projects_title')) {?>
            <h2 class="title-h2">
                <?php the_field("projects_title")?>
            </h2>
            <?php } ?>
            <ul class="projects-list">
                <?php 
                $category_name = get_field('category-name');
                $my_posts = get_posts(['category_name' => $category_name, 'posts_per_page' => 6,]);
                         foreach ($my_posts as $post):
                        get_template_part('template-parts/projects-card');
                        ?>
                <?php wp_reset_postdata(); endforeach ?>
            </ul>
        </div>

        <?php  if (get_field( 'projects_btn_text' )) {?>
        <a href=<?php the_field("projects_btn_link")?> class="tertiary-button read-more-btn">
            <?php the_field("projects_btn_text")?></a>
        <?php } ?>
    </section>

    <section class="help section">
        <div class="container">
            <?php  if (get_field( 'help_title')) {?>
            <h2 class="title-h2">
                <?php the_field("help_title")?>
            </h2>
            <?php } ?>

            <ul class="help-list">
                <?php 
                $helpList = get_field( 'help_list');
                if( $helpList ) {
                    foreach( $helpList as $item ) {
                    get_template_part('template-parts/help-card', null, array('item' => $item));
                    }
                } ?>
            </ul>
        </div>
    </section>

    <section class="auction section">
        <div class="container">
            <?php  if (get_field( 'auction_title')) {?>
            <h2 class="title-h2">
                <?php the_field("auction_title")?>
            </h2>
            <?php } ?>

            <p>Аукціоні знаходяться у розробці. Очікуйте...</p>

        </div>

        <?php  
        $auctionBtn = get_field( 'auction_btn' );
        if ($auctionBtn) {?>
        <a href=<?php echo $auctionBtn['link']?> class="tertiary-button read-more-btn">
            <?php echo $auctionBtn['text']?></a>
        <?php } ?>
    </section>

    <section class="partners section">
        <div class="container">
            <?php  if (get_field( 'partners_title')) {?>
            <h2 class="title-h2">
                <?php the_field("partners_title")?>
            </h2>
            <?php } ?>
            <?php  if (get_field( 'partners_text')) {
                the_field("partners_text");
            } ?>

            <div class="swiper partners-swiper">
                <?php 
                 $partnersSlider = get_field( 'partners_logo_slider');
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
</main>

<?php get_footer(); ?>