<?php
$x = [900, 1500, 2300];
foreach ($x as $value) {
    if ($value >= 1000) {
        echo $value*0.85 , PHP_EOL;
    } else {
        echo $value , PHP_EOL;
    }
    
}
