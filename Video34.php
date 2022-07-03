<?php

/*

 #34
    [*] Namespace : 
               - 
*/


require ('Apple.php');
require ('Sony.php');

/*
$iphone = new Sony\CreatPhone();
$iphone ->sayHello();
print_r($iphone);
*/


$iphone = new Apple\Hardware\Phones\CreatPhone();
$iphone ->sayHello();
print_r($iphone);

$tablet = new Apple\Hardware\Tablet\CreatTablet();
$iphone ->sayHello();
print_r($iphone);