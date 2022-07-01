<?php

/*

 #27 
    [*] Method Chaining : 
                        - When a Class's Methods return the $this keyword , the can be chained to gether
*/

class Iphone {
   public static $name = "Shehab";
   public static $ram = " 8 GB";
   
   public static function sayHello()
   {
      return "hello";
   }
}



$phone = new Iphone();
// echo $phone->name;
echo $phone->sayHello();
// echo Iphone::sayHello();

echo Iphone::$name . "<br>";
echo Iphone::$ram . "<br>";
echo Iphone::sayHello() . "<br>";
 