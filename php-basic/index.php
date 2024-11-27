<?php

require 'helpers.php';

$info = 'array_filter(array $array, callable|null $callback = null, int $mode = 0): array';

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

prettyPrintArray($even, $info);

$info = 'array_keys(array $keys, mixed $search_value, bool $strict = false): array';

$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$key = array_keys($array, 15, true);

prettyPrintArray($key, $info);

$info = 'array_map(callable|null $callable, array $array, array ...$arrays): array';

$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($array, $info);