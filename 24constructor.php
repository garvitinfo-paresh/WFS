<!-- Constructors and Destructors
Constructor
In PHP, a constructor allows you to initialize an object's properties upon the creation of the object. The constructor function starts with two underscores (__) and if we create a __construct() function, then PHP will automatically call this function when we create an object from a class.  -->
<?php
class Employee {
  public $name;
  public $surname;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
$emp1= new Employee("Raghav");
echo $emp1->get_name();
?>