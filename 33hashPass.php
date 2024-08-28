<?php
    // https://www.php.net/manual/en/function.password-hash.php
    
    $password = "admin@123";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo "Password -> ".$password."<br/>";
    echo "hash - Password -> ".$hash."<br/>";

    if(password_verify("admin@123", $hash)){
        echo"You are logged in!";
    }
    else{
        echo"Incorrect password!";
    }
?>