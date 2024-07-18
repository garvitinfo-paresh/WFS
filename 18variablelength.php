<!-- 4. Variable Length Argument
It is used when we need to pass n number of arguments in a function. To use this, we need to write three dots inside the parenthesis before the argument.  -->



<?php  
function add(...$nums) {  
    $sum = 0;  
    foreach ($nums as $n) {  
        $sum += $n;
    }  
    return $sum;  
} 
echo add(1, 2, 3,4,5,6);  
?>  