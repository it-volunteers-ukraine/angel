<?php
$icon = get_sub_field('icon');
$counter = get_sub_field( 'сounter' );
$description   = get_sub_field( 'description' );

?>

<li class="card">
    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
    <p class="counter"><?php echo $counter; ?></p>
    <p class="description"><?php echo $description; ?></p>

</li>