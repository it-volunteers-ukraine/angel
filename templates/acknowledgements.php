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
                <?php get_template_part( 'template-parts/loader' ); ?>
                <div class="acknowledgements__content__cards">
                
                </div>
                <div class="pagination">
                    
                </div>   
            </div>
        </div>
    </section>
</main>  
<!-- Модальне вікно -->
<div id="acknowledgementsModal" class="popup">
    <div class="popup__content">
        <a href="#" class="close-popup">&times;</a>
        <img id="modalImg" src="" alt="Подяка" style="width: 100%; height: auto;"/>
    </div>
</div>

<?php get_footer(); ?>