<!-- Inheritance
When a class is defined by inheriting the existing function of a parent class then it is called inheritance. Here child class will inherit all or a few member functions and variables of a parent class. We can define an inherited class by using the extends keyword. 

Inheritance has three types Single, Multiple and Multilevel Inheritance but PHP only supports single inheritance, where only one class can be derived from a single parent class. -->

<!-- https://www.php.net/manual/en/language.oop5.inheritance.php -->
 
<?php  
    class exm {  
        function func1()  
        {  
            echo "example of inheritance  ";  
        }     
    }  
    class exm1 extends exm {  
       function func2()  
        {  
            echo "in php";  
        }     
    }  
    $obj= new exm1();  
    $obj->func1();  
    $obj->func2();  
?>