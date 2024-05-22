<?php
/**
 * Template part for displaying posts
 */
$postsPerPage = $args['postsPerPage'];
$category = $args["category"];
$slug = $category ? $category->slug : '';
$isPaginationNeed = $args["pagination"];
$isSliderCard = $args["isSliderCard"]
?>
<div class="projects">
    <ul class="projects-list">
        <?php
        $params = array(
            'post_type' => 'post',
            'posts_per_page' => $postsPerPage,
            'paged' => get_query_var('page') ? get_query_var('page') : 1,
        );
        
        if ($slug) {
            $params['category_name'] = $slug;
        }
        $query = new WP_Query($params);

        $total_pages = $query->max_num_pages;
        $current_page = max(1, get_query_var('page'));

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                get_template_part('template-parts/projects-card', null, array("isSliderCard" => $isSliderCard));
            endwhile;
        endif; ?>
    </ul>
    <?php if($isPaginationNeed) {
        get_template_part('template-parts/pagination', null, array("current_page" => $current_page, "total_pages"=> $total_pages));
        }
    ?>

</div>