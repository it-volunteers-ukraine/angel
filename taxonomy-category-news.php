<?php
get_header();

$queried_object = get_queried_object();
$slug = $queried_object->slug;

?>
<main>
    <section class="container section">
        <h2 class="page-title title-h2"><?php echo $queried_object->description ?></h2>

        <div class="news">
            <ul class="news-list">
                <?php
            $args = array (
            'post_type' => 'news',
            'posts_per_page' => 6,
            'paged' => get_query_var('page') ? get_query_var('page') : 1,
            'tax_query' => array (
            array (
                'taxonomy' => $queried_object->taxonomy,
                'field' => 'slug',
                'terms' => $queried_object->slug,
                ),
            ),
            ) ;

            $query = new WP_Query($args);
            $total_pages = $query->max_num_pages;
            $current_page = max(1, get_query_var('page'));
            $post_type = $queried_object->slug;
            
            if ($query->have_posts()) :
                while ($query->have_posts()) :  
                    $query->the_post();
                    get_template_part('template-parts/news-card', null, array("post_type" => $post_type));
                endwhile;
            endif; ?>
            </ul>
            <?php get_template_part('template-parts/pagination', null, array("current_page" => $current_page, "total_pages"=> $total_pages));?>
        </div>
    </section>

    <?php if($slug === "media-about-us" || $slug === "media-about-us-en"):
        get_template_part('template-parts/auction-slider');
    endif; ?>
</main>
<?php get_footer(); ?>