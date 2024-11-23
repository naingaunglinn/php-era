<?php

/* Operators */

// Arithmetic Operators (+ - * / % **)
$x = '10';
$y = 0;

var_dump(fdiv($x, $y));
var_dump(+$x); // prefix with + to type casting

// Assignment Operators (= += -= *= /= %= **= )
$x = ($y = 10) + 5; // $x will be 15.
$x *= 40;
echo $x, $y;

// String Operators (. .=)

$x = 'Hello';

$x .= ' World';
echo $x;

// Comparison Operators (== === != <> !== < > <= >= )
$x = null;
$y = $x ?? 'hello';

echo ($y == false) ? 'H is not found' : 'H is found';

var_dump($x == $y);
var_dump ($x <> $y);
var_dump($x === $y);
var_dump($x <=> $y);
var_dump(0 == 'hello'); // 0 will convert into string
var_dump(0 == '0'); // will return true;

// Error Control Operator (@)

// Increment / Decrement Operators (++, --)

// Logical Operators (&& || ! and or xor)
$x = true;
$y = false;


function hello(){
    echo "hello world";

    return false;
}
var_dump($x && hello() || $y);
