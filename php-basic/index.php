<?php


/* Strings */

$x = 1;
$y = 2;

// Heredoc
$text = <<<TEXT
Line1 $x
Line2 $y
Line3
TEXT;

echo nl2br($text);


// Nowdoc
$text = <<<'TEXT'
Line1 $x
Line2 $y
Line3
TEXT;

echo "<br/>";
echo nl2br($text);