<!-- Function Arguments
Function Arguments: Argument is just like a variable which can be used to pass through information to functions. 

PHP supports Call by Value, Call by Reference, Default Argument Values and Variable-length argument. -->
<!-- 1. Call by Value
In Call by Value, the value of a variable is passed directly. This means if the value of a variable within the function is changed, it does not get changed outside of the function.  -->



<?php  
function incr($i)  
{  
    $i++;  
}  
$i = 5;  
incr($i);  
echo $i;  
?>  