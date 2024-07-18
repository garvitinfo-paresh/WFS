<!-- The scope of the variable is the area within which the variable has been created. Based on this a variable can either have a local scope or a global scope or a static scope in PHP.
Global Variable:
A variable which was created in the main body of the code and that can be accessed anywhere in the program is called Global Variable. Global variables can be directly accessed or used in or outside of a function with GLOBAL keyword before variable. However, we can also call them without the global keyword.  -->
<?php  
    $name = "Raj";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;  
?>  