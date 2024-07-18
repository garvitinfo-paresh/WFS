<!-- PHP Iterative Statements
Iterative statements are used to run same block of code over and over again for a certain number of times. 

In PHP, we have the following loops:

while Loop
do-while Loop
for Loop
foreach loop
 
1. While Loop
The While loop in PHP is used when we need to execute a block of code again and again based on a given condition. If the condition never becomes false, the while loop keeps getting executed. Such a loop is known as an infinite loop.  -->
<?php
$x = 1;
while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}
?>