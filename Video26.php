<?php

/*

 #26 
    [*] Static Keyword : 
                        - Static Properties / Methods are used to Access Properties / Methods in Global Scope
                        - Declaring Class Properties or Methods as Static
                          Makes them Accessible without Needing an Instantiations of the Class.
                        - Because static Methods are Callable without an instance of the object created,
                          the pesudo variable $this is not avilable  inside the method declared as static.
                        - A property Declared as Static Can not be accessed with an Instantiated Class Object ( Though a Static method can).
                        - One of the major Benefits to using Static Properties
                          is that they keep thier stored value for the Duration of the Script.
     
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
 