<?php
    $a = 5;
    echo isset($a);
    echo '<br>';
    echo gettype($a);
    $a = (float) $a;
    echo '<br>';
    echo gettype($a);
    echo '<br>';
    $b = '895';
    echo is_string($b);
    echo '<br>';
    echo (int) $b;
    echo '<br>';
    echo is_numeric($b); // хранит ли строка число
    unset($a); // очищение оперативной памяти
    echo '<br>';
    echo isset($a)? 'exists' : 'not';

