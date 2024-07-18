<!-- Foreach loop
The foreach loop in PHP can be used to access the array indexes in PHP. It only works on arrays and objects.  -->


<?php
echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");
foreach ($arr as  $value) {
    echo "$value <br>";
}
?>