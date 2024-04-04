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
                <h2 class="title title-h2"><?php echo $project_title ?></h2>
                <div class="block" id="cardsContainer">
                    <?php
                    // $posts_per_page =  (int) get_field('gallery-post-amount');
                    $params = array(
                        'category_name' => 'projects',        
                        // 'posts_per_page' => $posts_per_page,
                        // 'posts_per_page' => 4,  
                        // 'numberposts' => -1,     
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
