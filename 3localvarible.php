<!-- Local Variable:
A local variable is created within a function and can be only used inside the function. This means that these variables cannot be accessed outside the function, as they have local scope. -->

<?php  
    function mytest() 
    {  
        $capital = "Delhi";  
        echo "Capital of India is: " .$capital;  
    }  
    mytest(); //Calling the function
    //using $capital outside the function will generate an error  
    echo $capital;  
?>  