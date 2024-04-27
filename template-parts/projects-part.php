<?php
/**
 * Template part for displaying posts
 */
?>
<div class="projects">
    <ul class="projects-list">
        <?php

        $params = array(
            'category_name' => $args->slug,
            'posts_per_page' => 6,
            'paged' => get_query_var('page') ? get_query_var('page') : 1,
        );

        $query = new WP_Query($params);

        $total_pages = $query->max_num_pages;
        $current_page = max(1, get_query_var('page'));

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                get_template_part('template-parts/projects-card', null, array("isSliderCard" => false));
            endwhile;
        endif; ?>
    </ul>

    <?php get_template_part('template-parts/pagination', null, array("current_page" => $current_page, "total_pages"=> $total_pages));?>
</div>