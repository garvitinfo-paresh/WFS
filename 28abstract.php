<!-- Abstract Classes
Abstract classes and methods are when the parent class has a named method but the child class needs to complete the task.

An abstract class is a class that contains at least one abstract method. Abstract methods are methods that are declared in your code but not implemented.

We can define an Abstract class or method with the abstract keyword. -->
<!-- When inheriting from an abstract class, methods in subclasses must be defined with the same name and with the same or less restrictive access modifiers. So if an abstract method is defined as protected, the subclass's method must be either protected or defined as public, but not private. Also, the required arguments must be of the same type and number. However, subclasses can specify additional optional arguments.

So, when a child class is inherited from an abstract class, we have the following rules:

The child class method must be defined with the same name.
The child class method must be defined with the same or a less restrictive access modifier
The number of required arguments must be the same. However, the child class may have optional arguments in addition -->
<?php
// Parent class
abstract class Bike {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}
// Child classes
class Yamaha extends Bike {
  public function intro() : string {
    return "I'm a $this->name!"; 
  }
}
class splendor extends Bike {
  public function intro() : string {
    return "I'm a $this->name!"; 
  }
}
class Vespa extends Bike {
  public function intro() : string {
    return "I'm a $this->name!"; 
  }
}

// Create objects from the child classes
$yamaha = new yamaha("Yamaha");
echo $yamaha->intro();
echo "<br>";

$splendor = new splendor("Splendor");
echo $splendor->intro();
echo "<br>";

$vespa = new vespa("Vespa");
echo $vespa->intro();
?>