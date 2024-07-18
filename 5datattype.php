<!-- Data type specifies the type of value a variable requires to do various operations without causing an error. By default, PHP provides the following built-in data types:

String
Integer
Float
Boolean
Array
NULL -->
<!-- 1. String
A string is a sequence of characters that holds letters and numbers. It can be anything written inside single or double quotes.  -->
<?php
$x = "Hello world!";
echo $x;
?>
<!-- 
2. Integer
An integer is a non-decimal number typically ranging between  -2,147,483,648 and 2,147,483,647.  -->
<?php
$x = 55;
var_dump($x);
?>

<!-- 3. Float
A float is a number with a decimal point. It can be an exponential number or a fraction. -->
<?php
$x = 52.55;
var_dump($x);
?>

<!-- 4. Boolean
A Boolean represents two values: True or False.  -->
<?php
$x = true;
$y = false;
?>

<!-- 5. Array
Array is a collection of similar data elements stored in a single variable. -->
<?php
$x =array(“Rohan”, “Lovish”, “Harry”);
var_dump($x);
?>

<!-- 6. NULL
Null is a special data type with only one value which is NULL. In PHP, if a variable is created without passing a value, it will automatically assign itself a value of NULL. -->
<?php
$x =null;
?>