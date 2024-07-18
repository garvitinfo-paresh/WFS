<!-- Function Basics
Function arguments are variables of some supported data type that are processed within the body of the function. It can take input as an argument and return value. 

PHP has more than 1000 built-in functions, and in addition, you can also create your own functions. 

 

Advantages:
Functions reduce the complexity of a program and give it a modular structure.
A function can be defined only once and called many times. 
It saves a lot of code writing because you don't need to write the same logic multiple times, you can write the logic once and reuse it. 
 

Built-in Functions: PHP has thousands of built-in functions. For a complete reference and examples, you can go to this link<https://www.php.net/manual/en/funcref.php>.

 

User Defined Functions: Apart from built-in functions, We can also create our own functions and call them easily. 

Note: A function name should only start with letters and underscore only. It can’t start with numbers and special symbols. -->
<?php
function helloMsg() {
  echo "Hello world!";
}
helloMsg(); // call the function
?>