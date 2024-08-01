<!-- Connecting to MySQL
In order to access the data in the MYSQL database, first we need to connect to the database. Now, there are two types of approaches when connecting to the MySQL server.

MySQLi Object-Oriented Method
MySQLi Procedural Method -->
<!-- Connecting to Database using the MySQLi Object-Oriented Method -->
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db='test';

// Creating a connection
// $conn = new mysqli($servername, $username, $password,$db);
$con =  mysqli_connect('localhost','root','admin@1234','test');
// Checking the connection
if($con)
{
    echo "connection establish....";
}
else{
    echo "error";
}