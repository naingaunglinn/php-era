<?php

/** Functions  **/
// declare(strict_types= 1);
// function foo(int|float $a, int|float $b): int|float{
//     if($a % 2 == 0){
//         $a /= 2;
//     }

//     return $a * $b;
// }

// $x = 6.0;
// $y = 7;

// echo foo($x, $y);
// var_dump($x, $y);

function sum(...$numbers){
    return array_sum($numbers);
    var_dump($numbers); 
}

$x = 10;
$y = 20;

echo sum($x,$y,20,50);