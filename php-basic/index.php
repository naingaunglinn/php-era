<?php

/** Variable Scope  **/
// $x = 5;

// include ("script1.php");

// function foo($x){
//     return $x;
// }

// echo foo($x);

function getValues(){
    $value = someVeryExpensiveFunction();

    return $value;
}

function someVeryExpensiveFunction(){
    sleep(2);

    return 10;
}

$getValues = getValues();  
echo $getValues. '<br/>';
echo $getValues. '<br/>';
echo $getValues. '<br/>';