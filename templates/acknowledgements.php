<?php
/*
Template Name: Acknowledgements
*/
get_header();
?>

<main class="acknowledgements">
    <section class="acknowledgements__section section">
        <div class="container">
            <div class="acknowledgements__content">
                <h2 class="page-title title-h2"><?php the_field('acknowledgements_title'); ?></h2>
                <p><?php the_field('acknowledgements_text'); ?></p>
                <div class="acknowledgements__content__cards">

                </div>
                <div class="pagination">
                    
                </div>   
            </div>
        </div>
    </section>
    
</main>  

<?php get_footer(); ?>