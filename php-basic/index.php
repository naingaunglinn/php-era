<?php

/** Variable, anonymous & arrow functions  **/
$array = [1,2,3,4];

$array2 = array_map(fn($number) => $number * $number, $array);

echo "<pre>";
print_r($array2);