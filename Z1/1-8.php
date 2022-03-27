<?php

$a = 55;
$b = 44;
$c = 33;

    if ( $a < $b && $b < $c){
        echo " $a $b $c $c $b $a";
    }
    elseif ($a < $c && $c < $b){
        echo " $a $c $b $b $c $a";
    }
    elseif ($b < $a && $a < $c){
        echo " $b $a $c $c $a $b";
    }
    elseif ($b < $c && $c < $a){
        echo "$b $c $a $a $c $b";
    }
    elseif ($c < $b && $b < $a){
        echo " $c $b $a $a $b $c";
    }
    elseif ($c < $a && $a < $b){
        echo " $c $a $b $b $a $c";
    }