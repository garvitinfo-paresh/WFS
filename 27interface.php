<!-- Interface
Interfaces permit users to programmatically define the public methods that a class should implement without bothering about the implementation complexities and details of any particular method. Interfaces make it easy to use different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism" in PHP.

Interfaces are declared with interface keyword.  -->
<?php
interface Human {
  public function makeSound();
}

class Programmer implements Human{
  public function makeSound() {
    echo "Hello World";
  }
}

$human = new Programmer();
$human->makeSound();
?>