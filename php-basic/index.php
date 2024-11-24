<?php

/* Loops */

// while => working through if condition is true
$i = 0;
while ($i <= 15) {
    if($i % 2 == 0){
        $i++;
        continue;
    }
    echo $i++.','; 
}

// do-while => statement within the loop will execute once
$i = 0;
do {
    echo $i++;
} while($i <= 15);

// for 
$text = ['a', 'b', 'c'. 'd'];
for ($i=0, $length = count($text); $i < $length; $i++) {
    echo  '<pre>';
    echo  $text[$i];
}

// foreach
$programmingLanguages = ['PHP', 'js', 'go', 'python'];

foreach ($programmingLanguages as $language) {
    echo $language . '<br/>';
}

