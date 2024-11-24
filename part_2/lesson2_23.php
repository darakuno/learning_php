<?php
    //генератор помнит последнюю выполняемую строку
    function gen() {
        echo 1;
        yield 'a';
        echo 2;
        yield 'b';
        echo 3;
        yield 'c';
    }

    foreach(gen() as $v) {
        echo "$v<br> ";
    }

    function gen2($from, $to) {
        for ($i = $from; $i < $to; $i++) {
            echo "$i - ";
            yield $i;
        }
    }

    foreach (gen2(1,10) as $v) {
        echo "$v <br>";
    }

    function getGen($arr, $callback) {
        foreach($arr as $v) {
            yield $callback($v);
        }
    }

    $arr = [1,2,3,4,5,6,7];
    $gen = getGen($arr, fn($v) => $v *2);

    foreach ($gen as $g){
        echo "$g <br>";
    }

    function generator3($a, $callback) {
        foreach ($a as $key => $value){
            yield $key => $callback($value);
        }
    }
    $a = ['Alex' => 35, 'Mike' => 17];
    $generator = generator3($a, function($age) {
        return ($age < 23)? 'student' : 'worker';
    });

    foreach ($generator as $k => $v) {
        echo "$k - $v <br>";
    };

    //Генераторы экономят память 
    function gen4($count){
        for ($i = 0; $i < $count; $i++) {
            yield $i;
        }
    }
    $s = 0;
    foreach (gen4(10000000) as $i){
        $s += $i;
    }
    echo "$s <br>";
    echo memory_get_usage()." <br>";