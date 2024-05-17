<?php
$title = get_field('title-all-projects', 'option');
$seeMoreBtn = get_field( 'projects_btn', 'option' );
?>

<section class="projects-slider-section section">
    <div class="container">
        <?php  if ($title) {?>
        <h2 class="title-h2">
            <?php echo $title?>
        </h2>
        <?php } ?>
        <div class="carousel-wrapper">
            <div class="swiper projects-swiper">
                <ul class="swiper-wrapper projects-list">
                    <?php 
                    $my_posts = get_posts(['category_name' => 'projects', 'posts_per_page' => -1,]);
                    foreach ($my_posts as $post):
                        get_template_part('template-parts/projects-card', null, array("isSliderCard" => true));
                    ?>
                    <?php wp_reset_postdata(); endforeach ?>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
            <div class="navigation-buttons">
                <svg class="button-arrow button-next" width="40" height="40">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-slider-arrow">
                    </use>
                </svg>
                <svg class="button-arrow button-prev" width="40" height="40">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-slider-arrow">
                    </use>
                </svg>
            </div>
        </div>
        <div class="btn-wrapper">
            <?php 
            $link = get_field('project_link', 'options');
            ?>
            <a href="<?php  echo esc_url( get_term_link( $link ) );?>"
                class="tertiary-button see-more-btn"><?php echo the_field('project_btn', 'options');?></a>
            <?php  ?>
        </div>
    </div>


</section>