<!-- Destructor
Destructor is a special member function which is exactly the reverse of the constructor method. When it is called an instance of the class is deleted from the memory. The Destructor function starts with two underscores (__) and if we create a __destruct() function, then PHP will automatically call this function at the end of the script.  -->
<?php
class Employee {
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "Employee name is {$this->name}.";
  }
}
$emp1= new Employee("Izhaan");
?>