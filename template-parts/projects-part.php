<?php
/**
 * Template part for displaying posts
*/

?>	
<div class="block" id="cardsContainer">
    <?php     
    $category_name = get_field('category-name');   
    $number_of_posts = (int) get_field('number-of-posts');            
    $params = array(        
        'category_name' => $category_name,                          
        'numberposts' => $number_of_posts,                          
    );
    $my_posts = get_posts($params);
    foreach ($my_posts as $post) :                 
        $project_title = get_field('project-title', $post);   
        $project_post_link = $post->guid;   
        $project_text = get_field('project-purpose-text', $post);
        $project_img = get_field('project-image', $post);
        $project_alt = get_field('project-name', $post);                        
        ?>
        <div class="item" >
            <a href="<?php echo $project_post_link ?>">                  
                <div class="item__img"><img src="<?php echo $project_img ?>" alt="<?php echo $project_alt ?>"></div> 
                <div class="item__content">
                <h3 class="item__title"><?php echo $project_title ?></h3>    
                <p class="item__text"><?php echo $project_text ?></p>

                <?php if( get_field('project-choice') == 'Aктивний' ): ?>
                    <div class="item__choice">     
                    <p class="item__status"><?php the_field('projects-status', 'option'); ?></p>                         
                    <p class="item__active"><?php the_field('projects-active', 'option'); ?></p> 
                    </div>                             
                    <button class="item__link item__link-active"><?php the_field('projects-btn-support', 'option'); ?></button>

                    <?php elseif( get_field('project-choice') == 'Призупинено' ): ?>
                    <div class="item__choice">     
                        <p class="item__status"><?php the_field('projects-status', 'option'); ?></p>
                        <p class="item__disabled"><?php the_field('projects-stopped', 'option'); ?></p>
                    </div>  
                    <a href="#" disabled class="item__link item__link-disabled"><?php the_field('projects-btn-support', 'option'); ?></a>                                
                <?php endif; ?>

                </div> 
            </a> 
        </div>        
    <?php wp_reset_postdata(); endforeach ?>  
</div>
