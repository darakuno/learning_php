<?php
    $x = 2.4;
    switch (gettype($x)) {
        case 'double':
            $r = 'double';
            break;
        case 'integer':
            $r = 'int';
            break;
        case 'string':
            $r = 'str';
            break;
        default:
            $r = 'not found: '.gettype($x);
    }
    echo $r;
    $x = false;
    $r = match(gettype($x)) {
        'string' => 'str',
        'integer' => 'int',
        'boolean' => 'bool',
        default => 'not found'
    };
    echo $r;
    // switch слабое сравнение
    // match строгое сравнение (с типами)