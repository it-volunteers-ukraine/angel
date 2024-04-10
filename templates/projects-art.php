<?php
/*
Template Name: projects-art
*/
get_header();
?>
<main class="projects">   
    <section class="content section"> 
        <div class="container">
            <div class="body section">
                <h2 class="page-title title-h2"><?php the_field('art-category-title'); ?></h2>
                <?php get_template_part('template-parts/projects-part'); ?>
                <div class="pagination" id="pagination">
                    <!-- Pagination links will be added using JavaScript -->
                </div>
            </div>    
        </div>
    </section>
</main>
<?php get_footer(); ?>
