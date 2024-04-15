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
                        <p class="about__task-tablet"><?php the_field('project-purpose-task'); ?></p>
                    </div>
                    <div class="about__img">
                        <img src="<?php echo $project_img ?>" alt="<?php echo $project_alt; ?>">
                    </div>
                    <div class="about__info">
                        <p class="about__purpose-tablet"><?php the_field('projects-purpose', 'option'); ?></p>
                        <p class="about__task"><?php the_field('project-purpose-task'); ?></p>
                        <p class="about__text"><?php echo $project_text ?></p>
                        <div class="about__social">
                           <p class="share"><?php the_field('projects-share', 'option'); ?></p>    
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
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <section id="support-project"></secion>
<main>
<?php get_footer(); ?>
