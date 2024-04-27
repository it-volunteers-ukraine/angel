<?php
$title = get_field('title-all-projects', 'option');
$seeMoreBtn = get_field( 'projects_btn', 'option' );

?>

<section class="projects-slider-section">
    <div class="container">
        <?php  if ($title) {?>
        <h2 class="title-h2">
            <?php echo $title?>
        </h2>
        <?php } ?>
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
        <div class="btn-wrapper">
            <?php  if ($seeMoreBtn) {?>
            <a href=<?php echo $seeMoreBtn['link']?> class="tertiary-button see-more-btn">
                <?php echo $seeMoreBtn['text']?></a>
            <?php } ?>
        </div>
    </div>


</section>