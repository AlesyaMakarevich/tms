<?php

$email = $_POST ['email'];
$password = $_POST ['password'];
$phoneNumber = $_POST ['phone-number'];
$result = '/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u';
$resultN = '/^\+375(33|29|44|25)[1-9][0-9]{6}$/';
$resultP = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
if (preg_match($result, $email) && preg_match($resultN, $phoneNumber) && preg_match($resultP, $password)){
    print_r('Успешно зарегистрирован!');
}
else {
    print_r('Ошибка в данных');
}