<?php
    session_start();
    print_r($_COOKIE);
    $counter = $_SESSION['counter'] ?? 0;
    $counter++;
    $_SESSION['counter'] = $counter;
    print_r($_SESSION);
    echo $counter;
    unset($_SESSION['counter']);

    if (isset($_GET['color'])) {
        $_SESSION['color'] = $_GET['color'];
    } elseif (!isset($_SESSION['color'])){
        $_SESSION['color'] = '';
    }
    $color = match ($_SESSION['color']) {
        'red' => '#c00',
        'green' => '#0c0',
        'blue' => '#00c',
        default => '#fff'
    }
?>

<div style="background-color: <?=$color?>; width: 200px; height:200px;">
    <a href="?color=red">Красный</a>
    <a href="?color=blue">Синий</a>
    <a href="?color=green">Зеленый</a>
</div>

