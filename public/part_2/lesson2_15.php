<?php
    $arr = [2,3, 'next is true', true, -6,7]; //желательнее чем array()
    for ($i = 0; $i < count($arr); $i++) {
        echo "$arr[$i] <br>";
    }

    $a = ['name' => 'Michael','num' => 8293];
    echo $a['name'];
    
    //многомерные массивы
    $a3 = [$arr, $a];
    echo $a3[1]['num'];
