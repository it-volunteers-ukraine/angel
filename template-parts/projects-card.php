<?php
    $project_title = get_field('project-title', $post);   
    $project_post_link = $post->guid;   
    $project_text = get_field('project-purpose-text', $post);                        
    $project_img = get_field('project-image', $post);
    $project_alt = get_field('project-name', $post); 
?>

<li class="swiper-slide card">
    <div class="card-img">
        <img src="<?php echo $project_img ?>" alt="<?php echo $project_alt ?>">
    </div>
    <div class="info-wrapper">
        <div class="main-info">
            <div class="title-wrapper">
                <h3 class="card-title"><?php echo $project_title ?></h3>
            </div>
            <p class="card-text"><?php echo $project_text ?></p>
        </div>

        <div class="secondary-info">
            <?php if( get_field('project-choice') == 'Aктивний' ): ?>
            <div class="card-choice">
                <p class="card-status"><?php the_field('project-status'); ?></p>
                <p class="card-active"><?php the_field('project-active'); ?></p>
            </div>
            <div class="btn-wrapper">
                <a href="<?php echo $project_post_link ?>"
                    class="primary-button button"><?php the_field('project-link-text'); ?></a>
            </div>

            <?php elseif( get_field('project-choice') == 'Призупинено' ): ?>
            <div class="card-choice">
                <p class="card-status"><?php the_field('project-status'); ?></p>
                <p class="card-disabled"><?php the_field('project-stopped'); ?></p>
            </div>
            <div class="btn-wrapper">
                <a href="#" disabled
                    class="primary-button--disabled button"><?php the_field('project-link-text'); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</li>