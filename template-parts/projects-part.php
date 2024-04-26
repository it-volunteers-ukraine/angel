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
    'posts_per_page' => 1,
    'paged' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
    );

    $query = new WP_Query( $params );

    $total_pages = $query->max_num_pages;
    $current_page = max( 1, get_query_var( 'paged' ) );

    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
            $query->the_post();
            get_template_part('template-parts/projects-card');
        endwhile;
        wp_reset_postdata();
    endif;?>
    </ul>

    <div class="pagination">
        <?php
				echo paginate_links( [
					'base'      => get_pagenum_link(1) . '%_%',
					'format'    => '?page=%#%',
					'current'   => $current_page,
					'total'     => $total_pages,
					'prev_next' => false,
					'show_all'  => $total_pages <= 5,
					'end_size'  => 1,
					'mid_size'  => ( $current_page === 1 ) || ( $current_page == $total_pages ) ? 3 : 1,
				] );
			?>
    </div>

</div>