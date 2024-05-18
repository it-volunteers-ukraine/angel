<?php
/*
* Template Name: project
* Template post type: post
*/
get_header();
global $post;
$project_title = get_field('project-title', $post); 
$project_text = get_field('project-purpose-text', $post);
$project_img = get_field('project-image', $post);
$project_alt = get_field('project-name', $post);

?>

<main class="project">   
    <section class="about section"> 
        <div class="container">
            <div class="about__body section">
                <h2 class="page-title title-h2"><?php echo $project_title ?></h2>
                <div class="about__content">
                    <div class="about__info-tablet">                        
                        <p class="about__purpose-tablet"><?php the_field('projects-purpose', 'option'); ?></p>
                        <p class="about__purpose-tablet"><?php the_field('project-purpose-task'); ?></p>
                    </div>
                    <div class="about__img">
                        <img src="<?php echo $project_img ?>" alt="<?php echo $project_alt; ?>">
                    </div>
                    <div class="about__info">
                        <p class="about__purpose"><?php the_field('projects-purpose', 'option'); ?></p>
                        <p class="about__purpose"><?php the_field('project-purpose-task'); ?></p>
                        <p class="about__text"><?php echo $project_text ?></p>
                        <?php if( get_field('project-choice') == 'Aктивний' ): ?>
                            <div class="support__link"><a href="<?php the_field('projects-link-help', 'option'); ?>" class="primary-button" target="_blank"><?php the_field('projects-btn-help', 'option'); ?></a></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <section id="support-project" class="support section">
        <div class="container">
            <div class="support__body section">
                <h2 class="section-title title-h2"><?php the_field('projects-support-title', 'option'); ?></h2>
                <div class="support__content">
                    <?php if( get_field('project-choice') == 'Aктивний' ): ?>
                        <div class="support__columns">   
                            <div class="support__column">
                                <p class="support__swift-text"><?php the_field('swift-text', 'option'); ?></p> 
                                                                
                                <?php 
                                $rows = get_field('currency', 'option');
                                if ($rows) {        
                                    foreach ($rows as $row) {                                        
                                        echo '<div class="support-row">';         
                                        echo '<div class="support-row-block">';
                                        echo '<p class="support-row-name">';
                                        echo $row['currency-name'];
                                        echo '</p>'; 

                                        $details = $row['bank-details']; 
                                        if ($details) {  
                                            foreach ($details as $detail) { 
                                                echo '<p class="support-more closen">';
                                                echo $detail['bank-details-text'];
                                                echo '</p>';
                                            }
                                        }                                               

                                        echo '</div>'; 
                                        echo '<button class="support__btn"></button>';                                           
                                        echo '</div>';                                        
                                    }        
                                }
                                ?>

                            </div>    
                        </div> 
                        <div class="transferring__funds">
                            <?php get_template_part('template-parts/depositing-funds'); ?>
                        </div>
                        <div class="about__social">
                           <div class="share"><?php the_field('projects-share', 'option'); ?></div>    
                           <div class="about__social-block">                       
                                <a class="link" href="<?php the_field( 'telegram', 'option' ); ?>" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons-sprite.svg#telegram" alt="telegram"></use>
                                    </svg>                                                       
                                </a> 
                                <a class="link" href="<?php the_field( 'instagram', 'option' ); ?>" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons-sprite.svg#instagram" alt="instagram"></use>
                                    </svg>                                                       
                                </a> 
                                <a class="link" href="<?php the_field( 'youtube', 'option' ); ?>" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons-sprite.svg#youtube" alt="youtube"></use>
                                    </svg>                                                       
                                </a>
                                <a class="link" href="<?php the_field( 'facebook', 'option' ); ?>" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons-sprite.svg#facebook" alt="facebook"></use>
                                    </svg>                                                       
                                </a>     
                                <a class="link" href="<?php the_field( 'twitter', 'option' ); ?>" target="_blank">
                                    <svg class="icon">
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icons-sprite.svg#twitter" alt="twitter"></use>
                                    </svg>                                                       
                                </a>
                            </div>
                        </div>
                        <div class="back">           
                            <?php $link = get_field('back-link', 'option'); ?>
                            <a href="<?php echo esc_url( get_term_link( $link ) ); ?>" class="tertiary-button"><?php the_field('back-name','option'); ?></a>    
                        </div>  

                        <?php elseif( get_field('project-choice') == 'Призупинено' ): ?>                            
                        <div class="support__disabled item__choice">     
                            <p class="support__status item__status"><?php the_field('projects-status', 'option'); ?></p>
                            <p class="item__disabled"><?php the_field('projects-stopped', 'option'); ?></p>
                        </div>        

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </secion>
    <section class="auctions__section section"> 
        <div class="container">
            <h2 class="section-title title-h2"><?php the_field('auctions-title'); ?></h2>
            <div class="auctions__body">
                    <?php 
                    $category = $args["category"];
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 6, 
                        'category_name' => $category, 
                        'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
                    );
                    
                    $products = new WP_Query( $args );
                    $total_pages  = $products->max_num_pages;
                    $current_page = max( 1, get_query_var( 'paged' ) ); 
                
                if ( $products->have_posts() ) {
                    ?>
                    <ul class="auctions__products">
                    <?php 
                    while ( $products->have_posts() ) {
                        $products->the_post();
                        global $product;
                        set_query_var('product', $product);
                        get_template_part('template-parts/auction-card');
                    }
                    ?>
                    </ul>
                    <?php 
                    wp_reset_postdata();
                } 
                ?>
            </ul>
        </div>
    </section>            
</main>
<?php get_footer(); ?>
