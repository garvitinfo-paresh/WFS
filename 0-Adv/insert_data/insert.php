<?php
// include('connection.php');
        // echo $_POST["name"]."<br>";
        // echo $_POST["email"];
      if(isset($_POST["submit"]))
      {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
      }
      $con = mysqli_connect("localhost:3306","root","admin@1234","test");
      $query = "INSERT INTO `user`(`name`, `password`, `email`) VALUES ('$name','$password','$email')";
      // INSERT INTO `user`(`id`, `name`, `password`, `email`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
      $run = mysqli_query($con,$query);
      
      if($run==TRUE)
      {
        echo "data inserted sucessfully";
      }
      else{
        echo "error";
      }
?>