<?php
    $i = 0;
    while (++$i < 5) {
        echo "$i <br>";
    }
    $i = 0;
    while ($i++ < 5) {
        echo "$i <br>";
    }

    $s = 0;
    $n = 0;
    while ($n++ <10) {
        $s += $n;
        echo "$n <br>"; 
    }
    echo "$s <br>";