<?php

/* Return / Declare / Goto */

// function x($a, $b){
//     $c = $a + $b;
//     return $c; 
// }

// $x = x(10, 12);
// echo $x;
// return;
// echo "<br/> hello world";


// declare ticks
// function onTick(){
//     echo "tick <br/>";
// }

// register_tick_function('onTick');
// declare(ticks= 3);
// $i = 0;
// $length = 10;

// while($i < $length){
//     echo $i++;
// }


// declare encoding

// declare strict_types
declare(strict_types = 1);

function sum(int $a, int $b){
    return $a + $b;
}