<?php
    //замыкание этто анонимная функция (без имени)
    // получающая доступ к внешним или глобальным переменным

    // позволяет использвоать внешние переменные во внутренней
    // области видимости
    $a = 5;
    $b = 7;
    $test = function($c) use($a,$b) {
        echo "$a $b $c";
    };

    $test(4);