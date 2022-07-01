<?php

/*

 #18 & 19 
    [1] Polymorphism : 
                        - HAve Methods Without Body Code
             
*/


/*
interface Mobile{

    public function pressHome();
}



class Iphone implements Mobile {
   public $name;
   public function pressHome(){
      echo " You will see opened Applications";

   }
}




class sony {
   public $name;
   public function pressHome(){
      echo " You will close All Applications";
   }
}

$iphone = new Iphone();
$iphone-> pressHome();
echo "<pre>";
print_r($iphone);
echo "</pre>";

$sony = new Sony();
$sony-> pressHome();
echo "<pre>";
print_r($sony);
echo "</pre>";

*/





interface DBConnects {
   public function getUsers();
   public function getArticles();
   public function showStats();
}

class MySQL implements DBConnects{

   public function getUsers(){
      echo "SELECT * FROM user";
   }

   public function getArticles()
   {
      echo "SELECT * FROM articles";
   }
   public function showStats(){
      echo "SELECT * FROM stats";
   }
}

class Oracle implements DBConnects{
   public function getUsers(){
      echo "Hello FROM user";
   }

   public function getArticles()
   {
      echo "Hello FROM articles";
   }
   public function showStats(){
      echo "Hello FROM stats";
   }
}

class Postger implements DBConnects{
   public function getUsers(){
      echo "Test FROM user";
   }

   public function getArticles()
   {
      echo "Test FROM articles";
   }
   public function showStats(){
      echo "Test FROM stats";
   }
}


$row = new Postger();

$row -> getUsers();
$row -> getArticles();
$row -> showStats();

echo "<pre>";
print_r($row);
echo "</pre>";