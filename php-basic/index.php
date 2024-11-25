<?php

/** Functions  **/

// foo();
// bar();
// function foo(){
//     echo 'foo';
//     function bar(){
//         echo 'bar';
//     }
// }

/* Return Types and Strict Types */
declare(strict_types= 1);
function foo(): int|string{
    return '1';
}

var_dump(foo());