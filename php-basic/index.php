<?php

/* Arrays */
$programmingLanguages = ['PHP', 'JAVA', 'JAVASCRIPT'];

echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";
echo count($programmingLanguages);

array_push($programmingLanguages, 'C++', 'C', 'PYTHON');
echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";
echo count($programmingLanguages);

$programmingLanguages = [
    'php' => [
        'creator' => '',
        'website' => 'www.php.net',
        'extension' => '.php',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
        ]
    ],
    'python' => [
        'creator' => '',
        'website' => 'www.python.org',
        'extension' => '.py',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Oct 14, 2019']
        ]
    ]
];

echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";
echo count($programmingLanguages);