<?php
    //объявление константы
    define('COLOR', '#a0a');
    echo COLOR;
    echo '<br>';
    echo defined('COLOR');

    //встроенные константы
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';
    // разные разделители для винды \ и линукса /
    // помогает учесть DIRECTORY_SEPARATOR
    echo DIRECTORY_SEPARATOR;

    define('FONT_SIZE', '24px');
    ?>
    <p style="color: <?=COLOR?>;font-size: <?=FONT_SIZE?>">Hello, world!</p>
