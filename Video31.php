<?php

/*

 #31 
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



trait myFeature1 {
   public function feature()
   {
       echo " Hello from My Feature 1";
   }
}

trait myFeature2 {
   public function feature()
   {
       echo " Hello from My Feature 2";
   }
}

class Iphone  {
   use myFeature1, myFeature2 {
       // [Trait Name] :: [Method Name] Keyword [as] [New Name]
      myFeature2::feature as shehab ;
      // [Trait Name] [::] [Method Name] [instead of] [other Method name]
      myFeature1::feature insteadOf myFeature2;
   }
}

$iphone = new Iphone();
$iphone -> feature();
$iphone -> shehab();

echo " <pre>";print_r($iphone);echo " </pre>";
