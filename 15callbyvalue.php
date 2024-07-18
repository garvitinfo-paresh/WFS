<!-- 2. Call by Reference
In call by reference, the address of a variable (their memory location) is passed. In the case of call by reference, we prepend an ampersand (&) to the argument name in the function definition. Any change in variable value within a function can reflect the change in the original value of a variable. -->


<?php  
function incr($i){  
    $i++;  
}  
$i = 5;  
incr($i);  
echo $i;  
?>  