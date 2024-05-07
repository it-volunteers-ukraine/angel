<div class="transferring">
    <h3 class="transferring__title title-h6"><?php the_field('ways-transferring', 'option'); ?></h3>
    <div class="transferring__content">                                 
        <?php 
            $rows = get_field('transferring-funds', 'option');
            if( $rows ) {        
                foreach( $rows as $row ) {                                        
                    $image = $row['transferring-img'];
                    $link = $row['transferring-link'];
                    echo '<a href="' . esc_url( $link ) . '" class="" target="_blank">'; 
                        echo '<div class="transferring__img">'; 
                            echo wp_get_attachment_image( $image, 'full' ); 
                        echo '</div>';
                    echo '</a>';                                        
                }        
            }
        ?>
    </div>
</div>
