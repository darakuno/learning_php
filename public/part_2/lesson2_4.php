<?php
    // жесткие ссылки
    $a = 4;
    $b = & $a;
    $b++;
    echo "$b $a";
    unset($a); // удаляем ссылку a
    echo "$b"; //остается только ссылка b

    // символические ссылки
    $x = 2;
    $b = 'x';
    echo $$b; // выводим значение x
    $$b++;
    echo $$b;
    