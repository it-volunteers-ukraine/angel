<?php
/*
Template Name: Individual help
*/
get_header();
?>

<main>   
    <section class="section individual-help"> 
        <div class="container">
            <?php  if (get_field( 'first_title' )) {?>
                <h2 class="page-title title-h2"><?php the_field("first_title")?></h2>
            <?php } ?>
            <div class="individual-help-info">
                <div class="help-image-wrapper">
                    <?php  if (get_field( 'help_image' )) {?>
                    <img class="help-image" src="<?php echo esc_url( get_field( 'help_image' )['url'] ); ?>"
                        alt="<?php echo esc_attr( get_field( 'help_image' )['alt'] ); ?>" />
                    <?php } ?>
                </div>
                <div class="help-text">
                    <?php  if (get_field( 'help_text' )) {?>
                        
                            <?php the_field("help_text")?>
                        
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section need-help">
        <div class="container">
            <?php  if (get_field( 'second_title' )) {?>
                <h2 class="page-title title-h2"><?php the_field("second_title")?></h2>
            <?php } ?>
            <p class="title-h5 second-text ">
                <?php  if (get_field( 'second_text' )) {?>
                    
                        <?php the_field("second_text")?>
                    
                <?php } ?>
            </p>

            <div>
                
            </div>
        </div>
        
    </section>
</main>




<?php get_footer(); ?>