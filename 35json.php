<?php

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));

// $json = '{"number": 12345678901234567890}';

// var_dump(json_decode($json));
// var_dump(json_decode($json, false, 512, JSON_BIGINT_AS_STRING));


$json = json_encode(
    array(
        1 => array(
            'English' => array(
                'One',
                'January'
            ),
            'French' => array(
                'Une',
                'Janvier'
            )
        )
    )
);

// Show the errors for different depths.
var_dump(json_decode($json, true, 4));
// echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;

// var_dump(json_decode($json, true, 3));
// echo 'Last error: ', json_last_error_msg(), PHP_EOL, PHP_EOL;


?>
