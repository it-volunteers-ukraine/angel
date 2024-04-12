<?php
/*
Template Name: Activity
*/
get_header();
?>
<main>
  
    <section class="about-fund activity section">
        <div><?php get_template_part('template-parts/about-fund-section'); ?></div>
       <div class="container about-fund-section-continue">

            <div class="work-directions">
                <h2 class="title-h5 activity-block-title"><?php the_field( 'about_fond_work_directions_title' ); ?></h2>
                <?php if( have_rows('about_fond_work_directions_list') ): ?>
                    
                    <ul class="work-directions-list">

                        <?php while( have_rows('about_fond_work_directions_list') ): the_row(); ?>

                            <li class="work-directions-item"><?php the_sub_field('about_fond_work_directions_item'); ?></li>
                            
                        <?php endwhile; ?>

                    </ul>
                <?php endif; ?>
            </div>

            <div class="about-fond-name">
                <?php if ( get_field( 'about_fond_name_title' ) ) { ?>
                    <h2 class="title-h5 activity-block-title"><?php the_field( 'about_fond_name_title' ); ?></h2>
                <?php } ?>

                <?php if ( get_field( 'about_fond_name_text' ) ) { ?>
                <p class="about-fond-name-text"><?php the_field( 'about_fond_name_text' ); ?></p>
                <?php } ?>
            </div>
       </div>
    </section>
    <section class="section contact-persons">
         <?php get_template_part('template-parts/contact-persons-section'); ?>
    </section>
   

</main>



<?php get_footer(); ?>