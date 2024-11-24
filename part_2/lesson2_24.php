<?php
    // отладочные функции
    $arr = [1,2,3,4,5];

    $arr = [
        ['name' => 'Mike',
        'age' => 35 ],
        ['name' => 'Jake',
        'age' => 25 ],
        ['name' => 'Kate',
        'age' => 17 ],
    ];
    
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    echo '<br>';
    echo '<pre>';
    var_dump($arr);
    echo '<br>';

    var_export($arr);