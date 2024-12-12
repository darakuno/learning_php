<?php
    $counter = 0;

    if (isset($_COOKIE['counter'])) {
        $counter = $_COOKIE['counter'];
    }

    $counter++;

    print_r($_COOKIE).'<br>';

    setcookie('counter', $counter, time() + 365 * 86400);

    echo $counter.'<br>';
