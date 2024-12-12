<?php
    $s1 = 'Hello world!';
    $s2 = 'Привет, мир!';
    echo $s1.$s2;
    echo ' <br>';
    echo $s1[1].' <br>';
    echo $s2[1].' <br>';

    //каждый символ кириллицы занимает 2 байта
    // символ латиницы - 1 байт

    echo strlen($s1).' <br>';
    echo strlen($s2).' <br>';

    echo mb_strlen($s1).' <br>';
    echo mb_strlen($s2).' <br>';

    echo strpos($s1, 'or').' <br>';
    if (strpos($s1, 'Hello') !== false) echo 'found';
    else echo 'not found';
    echo ' <br>';
    echo ' <br>';

    if (str_contains($s1, 'Hello')) {
        echo 'found';
    }
    else {
        echo 'not found';
    }

    echo ' <br>';
    echo str_starts_with($s1, 'Hello');
    echo' <br>';
    echo str_starts_with($s2, 'lds');
    echo ' <br>';
    echo str_ends_with($s1, '!');
    echo' <br>';

    echo substr($s1, 3, 2);
    echo ' <br>';
    echo substr($s1, 3);
    echo ' <br>';
    echo substr($s1, 0, -2);
    echo ' <br>';
    echo mb_substr($s2, 3).' <br>';

    echo str_replace('o', 'hihi', $s1);
    echo $s1.' <br>';

    str_replace('o', 'hihi', $s1,$count);
    echo $count.' <br>';

    echo str_replace(['H', 'w'], ['11', '2'], $s1);
    echo' <br>';
    echo mb_strtoupper($s2);

    echo '<a href="lesson3_2.php?a='.urlencode('1 2 3 (4, 5, 6)').'">Ссылка</a><br/>';
    echo urldecode('1+2+3+%284%2C+5%2C+6%29').'<br>';

    $s3 = 'dsfsdf<h>inside h</h><a href="lesson3_2.php?a=423904>dsfjsoidf</a>';
    echo htmlspecialchars($s3).'<br>';

    echo strip_tags($s3, '<h>').'<br>';

    echo md5($s3).'<br>'; //hash з 32 символов
    // необратимый алгоритм (решается только методом перебора)

    $secret = md5("string secret");
    $pass1 = $secret.md5("user password");
    echo $pass1.'<br>';
    // уникальный хеш для каждой строки

    echo uniqid().'<br>';
    $s4 = 'Это очень-очень-очень большой текст, который нужно бы разбить на несколько строк';
    echo wordwrap($s4, 32, '<br>');
    echo '<br>';
    echo wordwrap($s4, 32); //переходы по \n
    echo '<br>';
    echo nl2br(wordwrap($s4, 32));

    $x = '34';
    $y = '234.22343';
    echo sprintf('%.2f sfsdf %b', $y, 213);
