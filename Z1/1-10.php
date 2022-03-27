<?php

$number = 3;
for ($i = 1; $i <= $number; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo ("*");
    }
    echo "<br>";
}
for ($i = $number; $i >= 0; $i--) {
for ($j = $i; $j > 0; $j--) {
    echo ("*");
}
    if ($i == 1)
        echo (" ");
    else
        echo "<br>";
}



    for ($i = $number; $i >= 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
    if ($j > $i)
    echo ("*");
    else {
    echo ("*");
    }
    }
    if ($i == 1)
    echo ("\t");
    else
    echo "<br>";
    }

    for ($i = 1; $i <= $number; $i++) {
    for ($j = 0; $j < $i; $j++) {
    if ($j < $number)
    echo ("*");
    else{
    //echo ("\t");
    echo ("*");
    }
    }
    echo "<br>";
    }


