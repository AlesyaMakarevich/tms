<?php

$year = rand(1000, 3000);
$num = $year % 12;

$answer = match ($num) {
    0 => 'Обезьяны.',
    1 => 'Петуха.',
    2 => 'Собаки.',
    3 => 'Свиньи.',
    4 => 'Крысы.',
    5 => 'Быка.',
    6 => 'Тигра.',
    7 => 'Кролика.',
    8 => 'Дракона.',
    9 => 'Змеи.',
    10 => 'Лошади.',
    11 => 'Козы.',
    default => 'Не удалось определить год.'
};
print_r($year . ' Год ' . ' - год ' . $answer);
