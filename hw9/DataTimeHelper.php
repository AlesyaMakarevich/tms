<?php

class DataTimeHelper
{
    public function getNextWorkDay(string $format = 'd.m.Y', int $timestamp = null): string
    {
        $nowTime = $timestamp?: time();
        $nowDay = date('N', $nowTime);

        if ($nowDay >= 5){
            $nextDay = strtotime('next Monday');
        } else{
            $nextDay = strtotime('+ 1 day');
        }
        return date($format, $nextDay);
    }
    public function nextBirthday(int $month, int $day): float
    {
        $nowDay = time();
        $birthday = mktime(hour: 0, month: $month, day: $day);
        $dateDiff = ceil(($birthday - $nowDay) / (60 * 60 * 24));

        if ($dateDiff > 0) {
            return $dateDiff;
        }
        else{
            return $dateDiff + 365;
        }
    }
}
$dateTimeHelper = new DataTimeHelper();
$nextWorkDay = $dateTimeHelper->getNextWorkDay();
$nextBirthday = $dateTimeHelper->nextBirthday(5,27);
