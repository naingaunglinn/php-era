<?php

/* Array */

$x = 5;

var_dump((array) $x);

$array = ['a' => 5, 'b' => null];

var_dump(array_key_exists('a', $array));
var_dump(isset($array['a']));