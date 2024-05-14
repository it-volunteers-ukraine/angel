<?php
/*
Template Name: Benefactors
*/
get_header();
?>
<main>   
    <section class="section benefactors"> 
        <div class="container">
            <?php  if (get_field( "first_title" )) {?>
                <h2 class="page-title title-h2"><?php the_field("first_title")?></h2>
            <?php } ?>
            <?php  if (get_field( "top_text" )) {?>
                    <p class="title-h5 top-text"> <?php the_field("top_text")?></p>
            <?php } ?>
            <div class="image-form-wrapper">
                <div class="image-wrapper">
                    <?php  if (get_field( 'benefactors_image' )) {?>
                        <img src="<?php echo esc_url( get_field( 'benefactors_image' )['url'] ); ?>"
                            alt="<?php echo esc_attr( get_field( 'benefactors_image' )['alt'] ); ?>" />
                    <?php } ?>
                </div>
                <div class="contact-form">
                    <?php
                        $formShortcode = get_field('form_shortcode');
                        if ($formShortcode): ?>

                        <?php echo do_shortcode($formShortcode); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section"> 
        <div class="container">
            <?php  if (get_field( "second_title" )) {?>
                <h2 class="page-title title-h2"><?php the_field("second_title")?></h2>
            <?php } ?>

            <?php get_template_part('template-parts/depositing-funds'); ?>
        </div>

    </section>
    
    <?php get_template_part('template-parts/partners-slider'); ?>

    <section class="section benefactors_projects">
        <?php get_template_part('template-parts/projects-slider',); ?>
       <div class="container">
            <div class="button_wrapper">           
                <?php 
                    $link = get_field('button_link');
                    if( $link ): ?>
                    <a href="<?php echo esc_url( get_term_link( $link ) ); ?>"
                        class="tertiary-button"><?php echo get_field("button_name")?>
                    </a>
                <?php endif; ?>   
            </div>  
       </div>
    </section>

</main>



<?php get_footer(); ?>