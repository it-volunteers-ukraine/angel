<?php
    $project_title = get_field('project-title', $post);   
    $project_post_link = $post->guid;   
    $project_text = get_field('project-purpose-text', $post);                        
    $project_img = get_field('project-image', $post);
    $project_alt = get_field('project-name', $post); 

?>

<li class="card">
    <a href="<?php echo $project_post_link ?>">
        <div class="card-img">
            <img src="<?php echo $project_img ?>" alt="<?php echo $project_alt ?>">
        </div>
        <div class="card-content">
            <div class="title-wrapper">
                <h3 class="card-title"><?php echo $project_title ?></h3>
            </div>
            <p class="card-text"><?php echo $project_text ?></p>

            <?php if( get_field('project-choice') == 'Aктивний' ): ?>
            <div class="card-choice">
                <p class="card-status"><?php the_field('project-status'); ?></p>
                <p class="card-active"><?php the_field('project-active'); ?></p>
            </div>
            <button class="primary-button button"><?php the_field('project-link-text'); ?></button>

            <?php elseif( get_field('project-choice') == 'Призупинено' ): ?>
            <div class="card-choice">
                <p class="card-status"><?php the_field('project-status'); ?></p>
                <p class="card-disabled"><?php the_field('project-stopped'); ?></p>
            </div>
            <button href="#" disabled
                class="primary-button--disabled button"><?php the_field('project-link-text'); ?></button>
            <?php endif; ?>

        </div>
    </a>
</li>