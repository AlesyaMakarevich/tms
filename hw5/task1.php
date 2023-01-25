<?php

$numbers = [
    '1234AB-7',
    'AC38553',
    'E7815-5',
    '4EB6453',
];

foreach ($numbers as $number) {
    $result = preg_match('/[0-9]{4}[A-Z]{2}-[1-7]|[E[0-9]{4}[A-Z]{2}-[1-7]|[1-7][A-Z]{2}[0-9]{4}/', $number);
    print_r('Result - ' . $result . PHP_EOL);
}