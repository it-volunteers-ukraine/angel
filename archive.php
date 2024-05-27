<?php
/**
 * Template part for displaying all posts
 */
get_header();

$category = get_queried_object();

?>
<main class="projects-category">
    <section class="container section">
        <h2 class="page-title title-h2"><?php echo $category->cat_name ?></h2>

        <?php get_template_part('template-parts/projects-part', '', array("category" => $category, "postsPerPage" => 6, "pagination" => true, "isSliderCard" => false )); ?>
    </section>
</main>
<?php get_footer(); ?>