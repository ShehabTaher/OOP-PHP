<?php

/*

 #5
    [1] Class    : Is A Blueprint that u can create object from
    [2] Object   : Is A Member In the main Application
    [3] Class Has Properties
    [4] Property : Variable Inside Class 
    [5] Variable : Variable Outside Class
    [3] Examples :
                   (1) Apple :
                            -> Class       = Apple Blueprint Design
                            -> Object      = iPhone that China Made
                            -> Application = Apple Store
                   (2) Web Applicatin Registration :
                            -> Class       = Code to Add new member
                            -> Object      = The Members
                            -> Application = Web Applicatin Registration
                   (3) Blog system :
                            -> Class       = Code to Add new Post , Articale , News , Infomartion
                            -> Object      = Post , Articale , News , Infomartion
                            -> Application = Blog system

*/

class AppleDevice {
   //Properties
   public $ram;
   public $inch;
   public $space;
   public $color;
}

$iphone6s = new AppleDevice();
$iphone7 = new AppleDevice();

echo "<pre>";
var_dump($iphone6s);
echo "</pre>";
echo "<pre>";
var_dump($iphone7);
echo "</pre>";
