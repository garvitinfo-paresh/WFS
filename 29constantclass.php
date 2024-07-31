<!-- Class Constants
Constants are like variables except that once they are defined, they cannot be changed. If we need to define some constant data within a class, we need to use class constants. Class constants are case-sensitive and they can be declared inside a class with the const keyword. 

We can also access a constant outside of a class by using the class_name followed by :: operator with constant name.  -->

<?php
class Namaste {
  const GREETING_MSG= "Namaskaram Dosto!!";
}
echo Namaste::GREETING_MSG;
?>
 
<!-- We can also use the self keyword to access the constant inside the class.  -->

<?php
class HelloWorld {
  const New_Message = "Did I leave the Stove on?";
  public function ByeWorld() {
    echo self::New_Message;
  }
}

$helloworld= new HelloWorld();
$helloworld->ByeWorld();
?>