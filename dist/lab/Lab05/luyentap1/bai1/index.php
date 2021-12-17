<!DOCTYPE html>
<html>
<head>
<title>LeQuocToan</title>
</head>
<body>
<?php
 #Create Database
 $con = new mysqli("localhost","root","");
 if($con->connect_error)
 {
 die("connection failed ". $con ->connect_error);
 }
 else echo "Connection successed"."</br>";
 $query = "create database std";
 $crdb = $con->query($query);
 if($crdb)
 {
 echo "Database created successfully";
 }
 else {
 echo "Error creating database: ".$con->error ;
}
?>
</body>
</html>