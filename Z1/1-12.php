<?php

$arr = array(
    '1' => array(
        1 => '5',
        2 => '3',
        3 => '7'
    ),
    '2' => array(
        1 => '12',
        2 => '34',
        3 => '54'
    ),
    '3' => array(
        1 => '114',
        2 => '643',
        3 => '111'
    )
);

function transpose($array) {
    array_unshift($array, null);
    return call_user_func_array('array_map', $array);
}

echo $arr;