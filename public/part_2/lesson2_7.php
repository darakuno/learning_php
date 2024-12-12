<?php
    $x = 'first string';
    $y = 'second string';
    echo $x.'-'.$y;
    echo '<br>';
    echo "asijdasioda{$x}dsjfsjdfi";
    //экранирования служебного символа \

    $res = `help`; //выполнить команду и записать
    // результат в res
    echo iconv('CP866', 'UTF-8', $res);
    $z = $x.=$y;
    echo $z;
