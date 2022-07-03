<?php

/*

 #28 
    [*] Trait : 
               - A Mechanism for Code Reuse In Single Inheritance languages such as PHP .
               - Promblem whith Extending Class , Is that uyou can only extend one . this is a little limitng.
               - with traits its possible for php classes to inherit methods & properties from Multiple Sources.
               - You can not extend or implements 
               - You can not instantiate .
               - Its suportting Class not Replacing it.
               - Can have Methods.
               - Hav priority over class.
*/

class Iphone {
   public  $name;
   public  $ram;
   
}


$phone = new Iphone();


echo " <pre>";
print_r($phone);
echo " </pre>";


 