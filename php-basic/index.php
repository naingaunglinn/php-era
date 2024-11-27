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

$info = 'array_merge(array ...$arrays): array';

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged, $info);

$info = 'array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed <br/>';

$invoiceItems = [
    ['price' => 9.99,  'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 10.99, 'qty' => 2, 'desc' => 'Item 2'],
    ['price' => 30,    'qty' => 4, 'desc' => 'Item 3'],
    ['price' => 158,   'qty' => 6, 'desc' => 'Item 4'],
    ['price' => 3.56,  'qty' => 1, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);

prettyPrintArray($total, $info);

$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];


