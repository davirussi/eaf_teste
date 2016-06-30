<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 <?php
 include "Login.php";

 $log = new Login();
 $log->name = "Davi";
 $log->email = "davirussi@gmail.com";


 $servername = "localhost";
 $username = "root";
 $password = "";
 try {
     $conn = new PDO("mysql:host=$servername;dbname=eaf", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully<br>";
 }
 catch(PDOException $e)
 {
     echo "Connection failed: " . $e->getMessage();
 }


 Login::validate("davi", "davi@gmail.com", $conn);



 ?>
</body>
</html>