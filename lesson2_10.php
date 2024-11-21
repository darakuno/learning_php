<?php
    if (isset($_GET['chislo'])){
        $x = $_GET['chislo'];
        if (is_numeric($x))
        {
            if ($x < 15) {
                echo 'smaller';
            }
            elseif ($x > 15) {
                echo 'not smaller';
            }
            elseif ($x == 15) echo 'equals';
        }
        else echo 'error';
    }
    echo $_GET['chislo']?? 'not set';
?>
<div>
    <a href="?chislo=5">5</a>
    <a href="?chislo=15">15</a>
    <a href="?chislo=17">17</a>
</div>
