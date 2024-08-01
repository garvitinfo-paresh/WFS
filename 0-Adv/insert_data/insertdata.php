<!-- Inserting Data in MySQL
In MySQL, the INSERT INTO statement is used to add new records to a MySQL table. The string values inside the SQL query must be quoted and the numeric values along with the NULL should not be quoted when used in a PHP script. 

Let's assume we want to add a new Employee to the Employees Table we created in the previous tutorial. We will use the following syntax:

INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...) -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Operation in php</title>
</head>
<body>
    <form action="insert.php" method="post">
      <table border="2">
        <tr>
          <td><lable> Name</lable></td>
          <td><input type="text" name="name" required="required"></td>
</tr>
<tr>
          <td><lable>Password</lable></td>
          <td><input type="password" name="pass" required="required"></td>
</tr>
<tr>
          <td><lable> Email</lable></td>
          <td><input type="email" name="email" required="required"></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" name="submit" value="click"></td>
</tr>
</table>
</form>
</body>
</html>