<?php

// PREG_OFFSET_CAPTURE
// If this flag is passed, for every occurring match the appendant string offset (in bytes) will also be returned. Note that this changes the value of matches into an array where every element is an array consisting of the matched string at offset 0 and its string offset into subject at offset 1.

// PREG_UNMATCHED_AS_NULL
// If this flag is passed, unmatched subpatterns are reported as null; otherwise they are reported as an empty string.


// preg_match('/()(bar)(baz)/', 'foobarbaz', $matches);
// print_r($matches);

// preg_match('/(a)(b)*(c)/', 'ac', $matches);
// var_dump($matches);
// preg_match('/(a)(b)*(c)/', 'ac', $matches);
// var_dump($matches);


// $subject = "abcdef";
// $pattern = '/^def/';
// preg_match($pattern, substr($subject,3), $matches);
// print_r($matches);



// /* The \b in the pattern indicates a word boundary, so only the distinct
//  * word "web" is matched, and not a word partial like "webbing" or "cobweb" */
// if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
//     echo "A match was found.";
// } else {
//     echo "A match was not found.";
// }

// if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
//     echo "A match was found.";
// } else {
//     echo "A match was not found.";
// }


// // get host name from URL
// preg_match('@^(?:http://)?([^/]+)@i',
//     "http://www.php.net/index.html", $matches);
// $host = $matches[1];

// // get last two segments of host name
// preg_match('/[^.]+\.[^.]+$/', $host, $matches);
// echo "domain name is: {$matches[0]}\n";



// $str = 'foobar: 2008';

// preg_match('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches);

// /* Alternative */
// // preg_match('/(?<name>\w+): (?<digit>\d+)/', $str, $matches);

// print_r($matches);


?>