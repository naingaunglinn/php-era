<?php

require 'helpers.php';

$info = 'array_chunk(array $array, int $length, bool $preserveKeys = false): array';

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items,2), $info);

$info = 'array_combine(array $key, array $values): array';

$array = ['a', 'b', 'c'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array, $array2), $info);

$info = 'array_filter(array $array, callable|null $callback = null, int $mode = 0): array';

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($data, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);
$even = array_values($even);

prettyPrintArray($even, $info);

$info = 'array_keys(array $keys, mixed $search_value, bool $strict = false): array';
$dataArray = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10 ];

$keys = array_keys($dataArray, 10);

prettyPrintArray($keys, $info);

$info = 'array_map(callable|null $callback, array $array, array ...$arrays): array';

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];
$values = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($values, $info);