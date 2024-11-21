<?php
    for ($i = 0; $i < 10; $i++) {
        if ($i == 2) continue;
        echo "$i hey <br>";
    }
    
    for ($i = 0, $j = 0; $i + $j < 30; $i += 2, $j++) {
        echo "i $i j $j sum: ".($i + $j).'<br>';
    }

    $sum = 0;
    for ($i = 0; $i <=10; $i++) {
        $sum += $i;
        ?> <a href="?ch=<?=$i?>"><?=$i?></a><?php
    }
    echo "<br>$sum";

