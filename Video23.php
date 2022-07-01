<?php

/*

 #23 
    [*] Magic Methods : 
                        - Method With special Name Start With Double Undescore [ __ ]
    [1] Get :
               - Called When Getting a Property Not Accessible Or Not Found
               - Accept One Parameters [$Prop]
   [1] Set :
               - Called When Getting a Property Not Accessible Or Not Found
               - Accept two Parameters [$Prop ,$value]
           
*/

class Iphone {
   public $name ;
   public $ram ;
    private $color;

   
//   public function __get($name)
//   {
//    echo " The Property [ " . $name . " ] Not Accessible Or Not Found <br>";
//   }
  
  public function __set($Prop, $val)
  {
   echo " The Property [ " . $Prop . " ] Not Accessible Or Not Found <br>";
   echo " And You Can not Assign this Value [ " . $val . " ] to it";
   }
}



$phone = new Iphone();
$phone -> color = "red";

//  echo $phone -> color ;
// echo $phone -> Test ;
// echo $phone -> Hello ;

echo " <pre>";
print_r($phone);
echo " </pre>";

