<?php
    echo M_PI.' <br>';
    echo M_E.' <br>';
    echo rad2deg(1);
    echo ' <br>';
    echo deg2rad(57);
    echo ' <br>';

    $x = 0.5;
    echo sin($x);
    echo ' <br>';
    echo abs(-10);

    $x = 2342.5230958290;
    echo ' <br>';
    echo round($x, 2);
    echo ' <br>';
    echo floor($x);
    echo ' <br>';
    echo ceil($x);

    echo ' <br>';
    echo mt_rand(1, 5);
    echo ' <br>';

    $a = [1,324,6,7,2,-3.75,43];
    echo ' <br>';
    echo min($a);
    echo ' <br>';
    echo max($a);
    echo ' <br>';
    echo base_convert('1111', 2, 10);
    
