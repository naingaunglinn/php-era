<?php

/* BOOLEANS */

$isComplete = true;

// intergers 0, -0 = false;
// floats 0.0 -0.0 = false;
// '' = false;
// '0' = false;
// [] = false;
// null = false;

if($isComplete){
    // do something;
    echo 'success';
} else {
    // do somethig else
    echo 'fail';
}

?>