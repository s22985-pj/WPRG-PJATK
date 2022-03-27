<?php


$l1 = $_POST['licz1'];
$l2 = $_POST['licz2'];
$oprnd = $_POST['choice'];
echo "$l1<br>";
echo "$l2<br>";
echo "$oprnd<br>";

if($oprnd=="+")
    $wynik=$l1+$l2;

else if($oprnd=="-")
    $wynik=$l1-$l2;

else if($oprnd=="*")
    $wynik=$l1*$l2;

else if($oprnd=="/")
    $wynik=$l1/$l2;

echo $wynik;