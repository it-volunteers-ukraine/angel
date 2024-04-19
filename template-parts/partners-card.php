<?php
$slide = $args['slide'];
$logo = $slide['logo_img'];
$link = $slide['link'];
$name = $slide['name']

?>

<li class="swiper-slide partners-card">

    <a class="link--<?php echo( $link ? '' : 'disable' ); ?>"  href="<?php echo htmlspecialchars($link); ?>">

        <?php 
        if($logo):
        ?>
        <img src="<?php echo $logo["url"] ?>" alt="<?php echo $logo["alt"] ?>">
        <?php else: ?>
        <div class="name-wrapper">
            <p class="name">
                <?php echo $name ?>
            </p>
        </div>
        <?php endif?>
    </a>

</li>