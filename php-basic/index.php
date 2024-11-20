<?php

/* PHP Data Types & Type Casting */
// # 4 Scalar Types
//     # bool - true / false
//     $complete = true;
//     # int - 1,10,100,1000,0,-100,-200 (No decimal)
//     $score = 95;
//     # float - 1.5,2.5,6.8, -0,19
//     $gpa = 7.5;
//     # string - "Naing Aung Linn", "Hello Friend"
//     $name = "Naing Aung Linn";
    
//     echo $complete . "<br/>";
//     echo $score . "<br/>";
//     echo $gpa . "<br/>";
//     echo $name . "<br/>";

//     echo var_dump($score);
//     echo gettype($gpa) . '<br/>';

// # 4 Compound Types
//     # array
//     $companies = [1, 2, 3, 0.9, 'A', true];
//     print_r($companies);
//     echo "<br/>";
//     # object
//     # callable
//     # iterable

// # 2 Special Types
//     # resource
//     # null

// declare(strict_types = 1);
    
    function sum(int $x, int $y){
        $x = 5.5;
        var_dump($x, $y);
        echo "<br/>";
        return $x + $y;
    }

    echo sum(3, '4') . '<br/>';

    $x = (int) '5';

    var_dump($x);

?>