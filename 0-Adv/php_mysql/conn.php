<!-- Connecting to MySQL
In order to access the data in the MYSQL database, first we need to connect to the database. Now, there are two types of approaches when connecting to the MySQL server.

MySQLi Object-Oriented Method
MySQLi Procedural Method -->
<!-- Connecting to Database using the MySQLi Object-Oriented Method -->
<?php
$servername = "localhost:3306";
$username = "root";
$password = "password";
$db='apple';

// Creating a connection
$conn = new mysqli($servername, $username, $password,$db);
// Checking the connection
if($conn)
{
    echo "connection establish....";
}
else{
    echo "error";
}

// Create a database
// $sql = "CREATE DATABASE apple";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
$sql = "CREATE TABLE Employees(
    employeeID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    joining_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table Employees created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    