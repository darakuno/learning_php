<?php
    if (true){
        $x = 5;
    }
    echo "$x <br>";
    // {} не являются разграничителем области видимости

    function getCount(){
        static $count = 0;
        $count++;
        echo "$count <br>";
        return $count;
    };

    getCount();
    getCount();
    getCount();

    function testGlobal(){
        $GLOBALS['x']++;
        echo $GLOBALS['x'];
    }
    $x = 3;

    testGlobal();