<div class="social__block">
    <?php
    $url = urlencode( get_permalink() );     
    $title = urlencode( get_the_title() );		
    
    $telegram_share_url = 'https://t.me/share/url?url=' . $url;
    echo '<a href="' . $telegram_share_url . '" target="_blank">
        <svg class="icon">            
            <use xlink:href="' . get_bloginfo('template_url') . '/assets/images/icons-sprite.svg#telegram" alt="telegram"></use>
        </svg> 
    </a>';

    $instagram_share_url = 'https://www.instagram.com/';
    echo '<a href="' . $instagram_share_url . '" target="_blank">
        <svg class="icon">            
            <use xlink:href="' . get_bloginfo('template_url') . '/assets/images/icons-sprite.svg#instagram" alt="instagram"></use>
        </svg> 
    </a>';

    $youtube_share_url = 'https://www.youtube.com/';
    echo '<a href="' . $youtube_share_url . '" target="_blank">
        <svg class="icon">            
            <use xlink:href="' . get_bloginfo('template_url') . '/assets/images/icons-sprite.svg#youtube" alt="youtube"></use>
        </svg>
    </a>';

    $fb_share_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url . '&title=' . $title;
    echo '<a href="' . $fb_share_url . '" target="_blank">
        <svg class="icon">
            <use xlink:href="' . get_bloginfo('template_url') . '/assets/images/icons-sprite.svg#facebook" alt="facebook"></use>
        </svg> 						    
    </a>';	
    
    $twitter_share_url = 'https://twitter.com/intent/tweet?url=' . $url;
    echo '<a href="' . $twitter_share_url . '" target="_blank">
        <svg class="icon">
            <use xlink:href="' . get_bloginfo('template_url') . '/assets/images/icons-sprite.svg#twitter" alt="twitter"></use>
        </svg> 
    </a>';
    ?>
</div>
