
<?php

$tab[0] = 5;
$tab[1] = 4;
$tab[2] = 3;
$tab[3] = 2;
$tab[4] = 1;

$tab1[0] = 1;
$tab1[1] = 2;
$tab1[2] = 3;
$tab1[3] = 4;
$tab1[4] = 5;


$wynik = 0;

for ($i =0; $i <= 4; $i++){
    $wynik += $tab[$i]*$tab1[$i];
    echo "\n".$wynik;

}
