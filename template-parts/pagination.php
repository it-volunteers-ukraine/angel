<?php
$current_page = $args["current_page"];
$total_pages = $args["total_pages"];
?>

<div class="pagination">
    <?php
        echo paginate_links([
            'format' => '?page=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_next' => false,
            'show_all' => $total_pages <= 5,
            'end_size' => 1,
            'mid_size' => ($current_page === 1) || ($current_page == $total_pages) ? 3 : 1,
        ]);

        wp_reset_postdata();
        ?>
</div>