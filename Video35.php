<?php

/*

 #35
    [*] Auto Load Classes : 
               - 
*/


spl_autoload_register(function ($class){

      require $class . ".php";
});


$var = new testing2();
print_r($var);