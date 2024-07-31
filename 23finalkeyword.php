<!-- Final Keyword
The final keyword can be used to prevent method overriding or to prevent class inheritance.  -->


 <?php

// Program to understand final classes
// in php
// class Base {
	
// // 	// Final method
// 	final function printdata() {
// 		echo "final base class final method";
// 	}
		
// 	// Non final method
// 	function nonfinal() {
// 		echo "\nnon final method of final base class";
// 	}
// } 
// $obj = new Base;
// $obj->printdata();
// $obj->nonfinal();
 ?>
<!-- //  Final methods: When a method is declared as final then overriding on that method can not be performed. Methods are declared as final due to some design reasons. Method should not be overridden due to security or any other reasons. -->
 <?php

// Program to understand use of
// final keyword for methods
class Base {
	
	// Final method
	final function printdata() {
		echo " Base class final printdata function";
	}
	
	// Non final method
	function nonfinal() {
		echo "\n This is nonfinal function of base class";
	}
}

// Class that extend base class
class Derived extends Base {
	
	// Inheriting method nonfinal
	function nonfinal() {
		echo "\n Derived class non final function";
	}
	// function printdata()
	// {
	// 	echo "<br> hiiii IANT";
	// }
	
	// Here printdata function can
	// not be overridden
}

$obj = new Derived;
$b1=new Base;
$obj->printdata();
$obj->nonfinal();
$b1->nonfinal();
// $b1->printdata();
 ?> 
