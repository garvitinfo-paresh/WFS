<!-- https://www.php.net/manual/en/language.exceptions.php -->
<!-- This function displays structured information about one or more expressions that includes its type and value. Arrays and objects are explored recursively with values indented to show structure. -->

<?php
//  Ex-1 
// function inverse($x) {
//     if (!$x) {
//         throw new Exception('Division by zero.');
//     }
//     return 1/$x;
// }

// try {
//     echo inverse(5) . "\n";
//     echo inverse(0) . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// }

// Continue execution
// echo "Hello World\n";

// Ex-2
// function inverse($x) {
//     if (!$x) {
//         throw new Exception('Division by zero.');
//     }
//     return 1/$x;
// }

// try {
//     echo inverse(5) . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// } finally {
//     echo "First finally.\n";
// }

// try {
//     echo inverse(0) . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// } finally {
//     echo "Second finally.\n";
// }

// // Continue execution
// echo "Hello World\n";


// Ex-3

// function test() {
//     try {
//         throw new Exception('foo');
//     } catch (Exception $e) {
//         return 'catch';
//     } finally {
//         return 'finally';
//     }
// }

// echo test();

// Ex-4
// class MyException extends Exception { }

// class Test {
//     public function testing() {
//         try {
//             try {
//                 throw new MyException('foo!');
//             } catch (MyException $e) {
//                 // rethrow it
//                 throw $e;
//             }
//         } catch (Exception $e) {
//             var_dump($e->getMessage());
//         }
//     }
// }

// $foo = new Test;
// $foo->testing();


?> 

