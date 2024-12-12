<?php
    function hello() {
        echo 'hello';
        sep();
    };

    function helloCount($count = 5) {
        if (!is_int($count)) {
            echo 'error';
            return;
        }
        for ($i = 0; $i < $count; $i++) {
            echo "$i ";
            hello();
        }
    };

    function sep() {
        echo '<br>';
    };

    helloCount(10);
    helloCount();

    function getSummam($a, $b){
        return $a + $b;
    }
    function change(&$a){
        $a++;
    }
    function noChange($a){
        $a++;
    }

    $x = 10;
    $y = 3;

    function printSom($s){
        echo "$s <br>";
    }
    printSom($x);
    change($x);
    printSom($x);
    noChange($x);
    printSom($x);

    function summaN(...$numbers) {
        if (count($numbers) == 0){
            return;
        }
        $sum = 0;
        foreach ($numbers as $n) {
            if (!is_numeric($n))
            {
                echo 'includes not numberic';
                return;
            }
            $sum += $n;
        }
        printSom($sum);
    }

    summaN(10,10,20,30,9,-5,"1");
    helloCount(count: 10);
