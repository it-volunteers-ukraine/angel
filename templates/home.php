<?php
/*
Template Name: home
*/
get_header();
?>
<main>
    <section class="hero">
        <div class="container">
            <div>
                <h2>
                    <?php the_field("hero_sub_title")?>
                </h2>
                <h1>
                    <?php the_field("hero_main_title")?>
                </h1>
                <p>
                    <?php the_field("hero_text")?>
                </p>
                <img src="<?php the_field("hero_image")?>" alt="" />
                <a href="#"><?php the_field("hero_btn_text")?></a>
            </div>

        </div>

    </section>
</main>



<?php get_footer(); ?>