<!-- 
raghavr@gmail.com raghav rajan 9898989898 
raghavr@gmail.com raghav rajan rathod +919898989898 
raghavr@gmail.com raghav rajan 919898989898  -->

<!-- chr — Generate a single-byte string from a number -->
<?php

// $a=65;
// $a=122;
// echo chr($a);
// ------

// ord() - Convert the first byte of a string to a value between 0 and 255
// $a='BAC';
// $a='Z';
// echo ord($a);
// $a=122;
// echo ord($a);
// ------x

// explode — Split a string by a string
// $p  = "piece1 piece2 piece3 piece4 piece5 piece6";
// $p  = " explode—Split—a—string—by—astring";
// $pieces = explode("—", $p);
// print_r($pieces);
// ------

// str_split — Convert a string to an array
// $a="hiii how r you";
// $a="abcdrdghi";

// $str = str_split($a);
// $str= str_split($a, 5);
// print_r($str);
// ------

// // implode — Join array elements with a string
// $array = ['lastname', 'email', 'phone'];
// $x=var_dump(implode("-", $array));
// $x=implode(",",$array);
// echo $x;
// ------

// lcfirst — Make a string's first character lowercase
// $f = 'HelloWorld';
// $f = 'HELLO WORLD';
// $f = lcfirst($f);
// echo $f; 
// ------

// ucfirst — Make a string's first character uppercase
// $f = 'helloWorld';
// $f = ucfirst($f);
// echo $f;
// ------

// strtolower() - Make a string lowercase
// $str = "Mary Had A Little Lamb and She LOVED It So";
// $str = strtolower($str);
// echo $str;
// ------

// strtoupper — Make a string uppercase
// $str = "Mary Had A Little Lamb and She LOVED It So";
// $str = strtoupper($str);
// echo $str;
// ------

// ucwords() - Uppercase the first character of each word in a string
// $foo = 'hello world!';
// $foo = ucwords($foo); 
// echo $foo;
// ------

// ltrim — Strip whitespace (or other characters) from the beginning of a string
// $text = "\t\tThese are a few words :) ...  ";
// $binary = "\x09Example string\x0A";
// $hello  = "Hello World";
// echo ltrim($binary);
// ------


// $str = "str_word_count — Return information about words used in a string";
// $str = "Hello fri3nd, you're
    //    looking          good today!";

// print_r(str_word_count($str,1));
// print_r(str_word_count($str,2));

// echo str_word_count($str);
// ------

// strcmp — Binary safe string comparison
// $var1 = "Hello";
// $var2 = "hello";
// if (strcmp($var1, $var2) !== 0) {
//        echo '$var1 is not equal to $var2 in a case sensitive string comparison';
// }
// ------

// strlen — Get string length
// $str = 'abcdef';
// echo strlen($str);
// ------

// substr — Return part of a string
// print substr('abcdef', -1);     // bcdef
// echo substr("abcdef", 1, null); // bcdef; prior to PHP 8.0.0, empty string was returned
// -6  -5  -4  -3  -2  -1
// a   b   c   d   e   f
// 0   1   2   3   4   5    

// echo substr('abcdef', 1, 3);  // bcd
// echo substr('abcdef', 0, 4);  // abcd
// echo substr('abcdef', 0, 8);  // abcdef
// echo substr('abcdef', -1,3);
// echo substr('abcdef', -5,5);
// echo substr('abcdef', 1,-2);
// echo substr('abcdef', -2,2);

// trim — Strip whitespace (or other characters) from the beginning and end of a string
// $text   = "\t\tThese are a few words :)                    ...        ";
// $binary = "\x09Example string\x0A";
// $hello  = "Hello World";

// echo trim($text);
?>