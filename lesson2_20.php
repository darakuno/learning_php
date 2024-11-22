<?php
    // анонимные функции
    $hello = function($string) {
        echo "$string <br>";
    };

    $hello('World');
    echo gettype($hello);

    function test($a, $func) {
        $arr = [];
        for ($i = 0; $i <= $a; $i++) {
            $arr[] = $func($i);
        }
        return $arr;
    }

    $arr = test(7, function($x) {
        return $x*2;
    });

    echo gettype($arr);

    foreach ($arr as $a) {
        echo "<br>$a";
    }

    $arr = test(7, function($x) {
        return $x-10;
    });
    foreach ($arr as $a) {
        echo "<br>$a";
    }

    function sum($arr, $cond = false){
        $sum = 0;
        foreach ($arr as $a){
            if (!$cond || $cond($a)) {
                $sum += $a;
            }
        }
        return $sum;
    }

    $check = function($a) {
        return $a % 2 == 0;
    };
    $s = sum($arr, $check);
    echo "<br>$s";
