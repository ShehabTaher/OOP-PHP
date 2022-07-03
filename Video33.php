<?php

/*

 #33
    [*] Namespace : 
               - 
*/


require ('Apple.php');
require ('Sony.php');


$iphone = new Sony\CreatPhone();
$iphone ->sayHello();
print_r($iphone);

$iphone = new Apple\CreatPhone();

$iphone ->sayHello();
print_r($iphone);