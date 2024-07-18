<!-- Static Variable:
PHP has a feature that deletes the variable once it has finished execution and frees the memory. When we need a local variable which can store its value even after the execution, we use the static keyword before it and the variable is called static variable. 
These variables only exist in a local function and do not get deleted after the execution has been completed.  -->
<?php  
    function static_var()  
    {  
        static $num1 = 3;    //static variable  
        $num2 = 6;          //Non-static variable  
        //increment in non-static variable which will increment its value to 7
        $num1++;  
        //increment in static variable which will increment its value to 4 after first execution and 5 after second execution
        $num2++;  
        echo "Static: " .$num1 ."</br>";  
        echo "Non-static: " .$num2 ."</br>";  
    }  


//first function call  
    static_var();  

//second function call  
    static_var();  
?>  