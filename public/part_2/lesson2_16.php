<?php
    $arr = [2,3, 'next is true', true, -6,7];
    foreach ($arr as $elem) {
        echo "$elem <br>";
    }

    $a = [
        [
            'name' => 'm',
            'age' => 31
        ],
        [
            'name' => 'f',
            'age' => 23
        ],
        [
            'name' => 'd',
            'age' => 29
        ]
    ];
    foreach ($a as $key => $value) {
        echo $key.' - ';
        foreach ($value as $k => $v) {
            echo "$k = $v, ";
        }
        echo '<br>';
    }

    $a = [];
    for ($i = 0; $i < 5; $i++) {
        $a[] = $i * 5;
        echo "$a[$i] <br>";
    }

    foreach ($a as $key => $value) {
        $a[$key] = $value * 2;
    }
    for ($i = 0; $i < 5; $i++) {
        echo "$a[$i] <br>";
    }

    foreach($a as &$val) {
        $val += 9;
    }
    for ($i = 0; $i < 5; $i++) {
        echo "$a[$i] <br>";
    }

    $m = ['Iv', '23190381', 'city'];
    list($name, $number, $city) = $m;
    echo $name, $number, $city;

    //пропуск ненужного элемента
    list(, $number, $city) = $m;
    echo $number, $city;

    $a1 = [
        'name' => 'm',
        'age' => 31
    ];
    $a2 = [
        'name' => 'dsfsdf',
        'age' => 23,
        'city' => 'Orel'
    ];
    $sum_a = $a1 + $a2; //конфликт имен 
    foreach ($sum_a as $v) {
        echo "$v <br>";
    }
    



