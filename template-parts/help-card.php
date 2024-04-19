<?php
    $item = $args['item'];
$title = $item['title'];
$text = $item['text'];
$btn = $item['btn'];
$image = $item['image']

?>

<li class="help-card">
    <div class="text-wrapper">
        <div class="decor">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/decor.png" alt="decor">
        </div>
        <?php  if ($title) {?>
        <h3 class="title">
            <?php echo $title?>
        </h3>
        <?php } ?>

        <?php  if ($text) {?>
        <p class="text">
            <?php echo $text?>
        </p>
        <?php } ?>

        <a href="<?php echo $btn['link']; ?>" class="secondary-button"><?php echo $btn["text"]; ?></a>


    </div>
    <div class="image-wrapper">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>


</li>