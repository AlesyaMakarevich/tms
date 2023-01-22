<?php


$string = '32389 frwj932';
$array = str_split($string);
$arrayFilter = array_filter($array, 'is_numeric');

print_r('Сумма найденных цифр: ' . array_sum($arrayFilter) . ' количество цифр: ' . count($arrayFilter));