<!-- 3. Default Argument Values
If we call a function without arguments, then PHP function takes the default value as an argument.  -->


<?php  
function Hello($name="Aakash"){  
echo "Hello $name <br>";  
}  
Hello("Rohan");  
Hello();//passing no value  
Hello("Lovish");  
?>  