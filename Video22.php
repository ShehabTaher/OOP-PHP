<?php

/*

 #22 
    [*] Magic Methods : 
                        - Method With special Name Start With Double Undescore [ __ ]
    [1] Call :
               - Called When Invoking function Not Accessible Or Not Found
               - Accept Two Parameters [ $MethodName , $Params]
             
*/

class Iphone {
   public $name ;
   public $ram ;

   public function __call($method, $params)
   {
    echo " The Method [ " . $method . " ] Not Found Or Not Accessable <br>"  ;
   print_r($params);
   }
}



$phone = new Iphone();
$phone -> sayHello("shehab", "Taher");

echo " <pre>";
print_r($phone);
echo " </pre>";

