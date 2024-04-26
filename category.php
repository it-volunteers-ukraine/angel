<?php
get_header();

$category = get_queried_object();

?>
<main class="projects-category">
    <section class="container section">
        <h2 class="page-title title-h2"><?php echo $category->cat_name ?></h2>
        <?php get_template_part('template-parts/projects-part', '', $category); ?>
    </section>
</main>
<?php get_footer(); ?>