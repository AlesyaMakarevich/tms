<?php


//$day = $argv[1];
//
//if ($day < 31 && $number > 0) {
//    if ($day < 13) {
//        print_r('1-я декада');
//    } elseif ($day > 12 && $number < 25) {
//        print_r('2-я декада');
//    } elseif ($day > 24 && $number < 32) {
//        print_r('3-я декада');
//    }
//} else {
//    print_r('Некорректный ввод!');
//}


//$number = print_r(pow(3 , 6));
//$result = $number % 5;
//if ($result = 0){
//    print_r(' Результат кратен 5');
//}
//else{
//    print_r(' Результат не кратен пяти');
//}


$year = $argv[1];
$a = $year %  4;
$b = $a % 100;
$c = $b % 400;
if ($a == 0) {
    print_r ('Год високосный');
}
elseif ($b == 0 && $c != 0){
    print_r('Год не високосный');
}
else {
    print_r('Год не вискосный');
}
