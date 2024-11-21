<?php
    $x = 5;
    $y = 0;
    $r = $x > 3;
    echo "$r <br>";
    //spaceship
    $n = 7 <=> 5;
    echo "$n <br>";
    $n = 5 <=> 7;
    echo "$n <br>";
    $n = 5 <=> 5;
    echo "$n <br>";

    $x_str = '5';
    echo ($x == $x_str).' <br>';    
    echo ($x === $x_str).' <br>';   // эквивалентность
    // проверяет и значение и типы