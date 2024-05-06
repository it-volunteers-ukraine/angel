<?php
// Отримати значення ширини екрану з POST-запиту
$screenWidth = isset($_POST['screenWidth']) ? $_POST['screenWidth'] : null;

// Встановити кількість постів на сторінці в залежності від ширини екрану
if ($screenWidth >= 1441) {
    $posts_per_page = 8;
} elseif ($screenWidth >= 576) {
    $posts_per_page = 6;
} else {
    $posts_per_page = 3;
}

// Повернути кількість постів на сторінці
echo $posts_per_page;
?>