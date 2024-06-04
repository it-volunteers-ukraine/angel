<?php
    $title = get_field('title', $post);   
    $postLink = $post->guid;   
    $date = $post->post_date;
    $text = get_field('text', $post);                        
    $image = get_field('main_img', $post);
    $post_type = $args['post_type'];
    $website_name = get_field('post_author_website', $post);
    $website_link = get_field('link_to_post_author_website', $post);
?>

<?php if(strpos($post_type, "blog") !== false): ?>
<li class="news-card">
    <div class="card-img">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    </div>
    <div class="info-wrapper">
        <div class="date-wrapper">
            <svg width="16" height="16" class="calendar">
                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-calendar"></use>
            </svg>
            <p class="date">
                <?php echo $date ?>
            </p>
        </div>
        <div class="main-info">
            <div class="title-wrapper">
                <h3 class="card-title"><?php the_title() ?></h3>
            </div>
            <div class="card-text"><?php echo $text ?></div>
        </div>


        <div class="btn-wrapper">
            <a href="<?php echo $postLink ?>"
                class="secondary-button"><?php the_field('read_more_btn', 'option'); ?></a>
        </div>
    </div>

</li>
<?php endif ?>

<?php if(strpos($post_type, "media-about-us") !== false): ?>
<li class="news-card <?php echo (strpos($post_type, "media-about-us") !== false) ? "media-about-us": null?>-card">
    <div class="card-img">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    </div>
    <div class="info-wrapper">
        <div class="title-wrapper">
            <p class="card-title"><?php echo $website_name ?></p>
        </div>
        <a href=" <?php echo esc_attr($website_link['url']);?>" target="__blank" class="text-btn">
            <?php the_field('read_more_btn', 'option'); ?></a>
    </div>
</li>
<?php endif ?>