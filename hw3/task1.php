<?php


$site = 'http://test.com';

if (str_starts_with($site, 'http')){
    print_r('Сайт защищен');
}
else{
    print_r('Сайт не защищён');
}