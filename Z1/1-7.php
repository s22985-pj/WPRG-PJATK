<?php

    $msc = 1;
    $dz  = 12;


    if (($msc > 0) and ($msc <= 12)){
        switch ($msc) {
            case 1:
                if ($dz <= 31 or 0 > $dz) {
                    echo "Styczeń $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
                
            case 2:
                if ($dz <= 29 or 0 > $dz) {
                    echo "Luty $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 3:
                if ($dz <= 31 or 0 > $dz) {
                    echo "Marzec $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 4:
                if ($dz <= 30 or 0 > $dz) {
                    echo "Kwiecień $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 5:
                if ($dz <= 31 or 0 > $dz) {
                    echo "Maj $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 6:
                if ($dz <= 30 or 0 > $dz) {
                    echo "Czerwiec $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 7:
                if ($dz <= 31 or 0 > $dz) {
                    echo "Lipiec $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 8:
                if ($dz <= 30 or 0 > $dz) {
                    echo "Sierpień $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 9:
                if ($dz <= 31 or 0 > $dz) {
                    echo "Wrzesień $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 10:
                if ($dz <= 30 or 0 > $dz) {
                    echo "Październik $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 11:
                if ($dz <= 31 or 0 > $dz) {
                    echo "Listopad $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
            case 12:
                if ($dz <= 30 or 0 > $dz) {
                    echo "Grudzień $dz";
                } else {
                    echo "Błąd dnia";
                }
            break;
        }

    }   else echo "Błąd miesiąca";
