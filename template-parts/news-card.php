<?php
    $title = get_field('title', $post);   
    $postLink = $post->guid;   
    $text = get_field('text', $post);                        
    $image = get_field('main_img', $post);
?>

<li class="projects-card ">
    <div class="card-img">
        <img src="<?php echo $image ?>" alt="<?php echo $project_alt ?>">
    </div>
    <div class="info-wrapper">
        <div class="main-info">
            <div class="title-wrapper">
                <h3 class="card-title"><?php echo $title ?></h3>
            </div>
            <p class="card-text"><?php echo $text ?></p>
        </div>

        <div class="btn-wrapper">
            <a href="<?php echo $postLink ?>"
                class="primary-button button"><?php the_field('projects-btn-support', 'option'); ?></a>
        </div>
    </div>
</li>