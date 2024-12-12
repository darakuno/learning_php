<?php
    $x = 2.4;
    switch (gettype($x)) {
        case 'double':
            echo 'double';
            break;
        case 'integer':
            echo 'int';
            break;
        case 'string':
            echo 'str';
            break;
        default:
            echo 'not found: '.gettype($x);
    }