<?php
get_header();

$category = get_queried_object();
echo var_export($category, true)
?>
<main class="projects-category">
    <section class="container section">
        <h2 class="page-title title-h2"><?php echo $category->description ?></h2>
        <!-- <?php get_template_part('template-parts/news-part', '', array("category" => $category->slug, "postsPerPage" => 6, "pagination" => true )); ?> -->

        <ul class="news-list">
            <?php
        $params = array(
            'category_name' => $category->slug,
            'posts_per_page' => 6,
            'paged' => get_query_var('page') ? get_query_var('page') : 1,
        );

        $query = new WP_Query($params);
        echo var_export($query, true);
        $total_pages = $query->max_num_pages;
        $current_page = max(1, get_query_var('page'));

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                echo $query->the_post();
                get_template_part('template-parts/news-card');
            endwhile;
        endif; ?>
        </ul>
        <?php get_template_part('template-parts/pagination', null, array("current_page" => $current_page, "total_pages"=> $total_pages));?>
    </section>
</main>
<?php get_footer(); ?>