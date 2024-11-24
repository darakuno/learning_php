<?php
    $a = [12,34, 5, 5, 4, 9 ,5, 2 ,4 ,9];
    echo is_array($a).'<br>';

    $b = array_unique($a);
    print_r($b);
    echo '<br>';
    shuffle($a);
    print_r($a);

    print_r(array_reverse($b));
    echo '<br>';
    print_r(array_flip($b));

    $x = ['name' => 'Alex', 'age' => 67];
    echo '<br>';
    print_r(array_values($x));
    echo '<br>';
    print_r(array_keys($x));
    echo '<br>';

    $b = [4,4,10,-3,18,9];
    $all = array_merge($a, $b);
    print_r($all);

    echo '<br>';
    $list = range(1, 10);
    print_r($list);

    foreach(range(0, 9) as $i) echo $list[$i].'<br>';

    sort($all);
    print_r($all);
    echo '<br>';

    rsort($all);
    print_r($all);
    echo '<br>';

    asort($b); //сортирвока с сохранением ключей
    print_r($b); 
    echo '<br>';

    ksort($b); //сортировка по ключам

    $list = [10,40,-50,0,30,20,-15];
    uasort($list, 'mySort'); // пользовательская сортировка
    print_r($list);
    echo '<br>';

    function mySort($a, $b) {
        return abs($a) <=> abs($b);
    }

    