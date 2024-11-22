<?php
    //стрелочные функции
    $x = 1;
    $b = 9;

    $sum = function() use($x, $b) {
        return $x + $b;
    };

    echo $sum();

    $sum = fn() => $x + $b;
    //автоматически доступ к глобальным переменным

    echo $sum();

    function printArray($arr, $cond) {
        foreach($arr as $key => $value) {
            if ($cond($key)) {
                echo "<br> $value";
            }
        }
    }

    $arr = [1,2,3,4,5,6,7,8];
    printArray($arr, fn($index) => $index % 2 == 0);