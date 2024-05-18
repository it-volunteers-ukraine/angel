<?php
get_header();
?>

<main class="singel-news">
    <section class="container news-content section">
        <?php
		$post = get_post();
		$text = get_field('text', $post);                        
    	$image = get_field('main_img', $post);
	?>
        <h2 class="page-title title-h2"><?php the_title()?></h2>
        <div class="main-content">
            <div class="image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
            <div class="card-text"><?php echo $text ?></div>
        </div>

        <div class="carousel-wrapper">
            <div class="swiper news-gallery">
                <?php
					$images = get_field( 'gallery' );
					if ( $images ): ?>
                <div class="swiper-wrapper">
                    <?php foreach ( $images as $image ): ?>
                    <a class="swiper-slide" href="<?php echo esc_url( $image['url'] ); ?>"
                        data-lightbox="galleryImages">
                        <img src="<?php echo esc_url( $image['url'] ); ?>"
                            alt="<?php echo esc_attr( $image['alt'] ); ?>">
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
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
            <div class="back-btn-wrapper">
                <button class="tertiary-button back-button" type="button" onclick="history.back();">
                    <?php echo the_field('back-name', 'options') ?> </button>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/projects-slider',); ?>
</main>

<?php
get_footer();