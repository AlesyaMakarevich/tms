<?php


$departments = [
    'developers' => [
        [
            'name' => 'nik',
            'position' => 'developer',
            'salary' => 900
        ],
        [
            'name' => 'sergey',
            'position' => 'developer',
            'salary' => 1200
        ],
        [
            'name' => 'andrey',
            'position' => 'developer',
            'salary' => 1400
        ]
    ],
    'managers' => [
        [
            'name' => 'yulia',
            'position' => 'manager',
            'salary' => 1150
        ],
        [
            'name' => 'darya',
            'position' => 'manager',
            'salary' => 1100
        ],
        [
            'name' => 'viktoria',
            'position' => 'manager',
            'salary' => 1000
        ]
    ],
];
$averageSalaries = [];

foreach ($departments as $nameDepartments => $descriptions) {
    $averageSalaries[$nameDepartments] = array_sum(array_map(function ($sum) {
            return $sum['salary'];
        }, $descriptions)) / count($descriptions);
}

print_r($averageSalaries);

