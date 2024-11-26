<?php

/* Date & Time */

$currentTime = time();

echo $currentTime . "<br/>";

echo $currentTime + 5 * 24 * 60 * 60 . "<br/>";

echo $currentTime - 60 * 60 * 24 . "<br/>";

echo date('m/d/y g:ia', $currentTime + 5 * 24 * 60 * 60) . "<br/>";

echo date('m/d/y g:ia', $currentTime - 60 * 60 * 24) . "<br/>";

$date = date('m/d/Y g:ia', strtotime('second friday of January'));

echo "<pre/>";
print_r(date_parse($date));