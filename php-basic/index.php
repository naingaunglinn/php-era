<?php

/* Control Structures (if / else / elseif / else if)  */

$score = 95;
if($score >= 90){
    echo 'A';
    if($score >= 95){
        echo '+';
    }
} else if($score >= 80 ) {
    echo 'B';
} else if($score >= 70) {
    echo 'C';
} else if($score >= 60) {
    echo 'D';
} else {
    echo 'F';
}