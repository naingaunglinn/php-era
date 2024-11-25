<?php

/** Variable, anonymous & arrow functions  **/
// $x = 20;

$sum = function (callable $callback, int|float ...$numbers): int|float{
    return $callback(array_sum($numbers));
};

echo $sum('foo', 1, 2, 3, 4);

// $array = [1,2,3,4];

function foo($element){
    return $element * 2;    
}

// $array2 = array_map('foo', $array);

// echo "<pre>";
// var_dump($array);
// var_dump($array2);