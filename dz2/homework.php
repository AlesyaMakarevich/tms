<?php

//$number = rand(0 , 1000);
//
//isEven($number);
//function isEven($number)
//{
//    if ($number % 2 == 0){
//        print_r($number . ' - Чётное');
//    }
//    else{
//        print_r($number . ' - Нечётное');
//    }
//}


//$year = rand(1000, 3000);
//$isLeap = date('L', mktime(0, 0, 0, 1, 1, $year));
//echo $year . ($isLeap ? ' Високосный' : ' Не вискосный');


$nowDay = date('w');
$nowTime = date('G');
isWorking($nowDay, $nowTime);
function isWorking($nowDay, $nowTime){
    if($nowDay == 0 || $nowDay == 6 || $nowTime >= 21 || $nowTime < 9){
        print_r('Магазин не работает');
    }
    else{
        print_r('Магазин работает, до закрытия осталось: ' . (21 - $nowTime) . ' часов');
    }
}



