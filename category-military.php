<?php
/*
Template Name: projects
*/
get_header();
?>
<main class="projects">   
    <section class="content section"> 
        <div class="container">
            <div class="body section">
                <h2 class="page-title title-h2"><?php the_field('title-all-projects', 'option'); ?></h2>
                <div class="block" id="cardsContainer">
                    <?php                    
                    $params = array(
                        'category_name' => 'military',                          
                        'numberposts' => -1,     
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
                        <a href="<?php echo $project_post_link ?>" target="_blank">                  
                          <div class="item__img"><img src="<?php echo $project_img ?>" alt="<?php echo $project_alt ?>"></div> 
                          <div class="item__content">
                            <h3 class="item__title"><?php echo $project_title ?></h3>    
                            <p class="item__text"><?php echo $project_text ?></p>
                              
                            <?php if( get_field('project-choice') == 'Aктивний' ): ?>
                              <div class="item__choice">     
                                <p class="item__status"><?php the_field('project-status'); ?></p>                         
                                <p class="item__active"><?php the_field('project-active'); ?></p> 
                              </div>                             
                              <button class="item__link item__link-active"><?php the_field('project-link-text'); ?></button>
                              
                              <?php elseif( get_field('project-choice') == 'Призупинено' ): ?>
                                <div class="item__choice">     
                                  <p class="item__status"><?php the_field('project-status'); ?></p>
                                  <p class="item__disabled"><?php the_field('project-stopped'); ?></p>
                                </div>  
                                <a href="#" disabled class="item__link item__link-disabled"><?php the_field('project-link-text'); ?></a>                                
                            <?php endif; ?>

                          </div> 
                        </a> 
                      </div>        
                    <?php wp_reset_postdata(); endforeach ?>  
                </div>
                <div class="pagination" id="pagination">
                    <!-- Pagination links will be added using JavaScript -->
                </div>
            </div>    
        </div>
    </section>
</main>
<?php get_footer(); ?>