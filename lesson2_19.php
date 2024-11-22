<?php
    function factorial($n){
        if ($n <= 1) {
            return 1;
        }
        else {
            return $n * factorial($n-1);
        }
    }

    echo factorial(3);

    function fib($n, $arr) {
        if (count($arr) < 2) return $arr;
        $n1 = $arr[count($arr) - 1];
        $n2 = $arr[count($arr) - 2];
        $arr[] =$n1 + $n2;
        if (count($arr) == $n){
            return $arr;
        }
        else {
            return fib($n, $arr);
        }
    }

    foreach(fib(5, [0,1]) as $f) {
        echo "<br> $f ";
    }

    