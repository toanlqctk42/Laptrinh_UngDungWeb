<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>LeQuocToan</title>
</head>
<body>
<?php
#create table computer
    $db = 'std';
    $con = new mysqli("localhost","root","",$db);
    if($con->connect_error)
    {
    die("connection failed ". $con ->connect_error);
    }
    else echo "Connection successed"."</br>";
    $query = "create table computer(id INT not null,name varchar(50),branch varchar(50))";
    $crtb = $con->query($query);
    if(!$crtb)
    {
    die("Table not created: ".$con->error);
    }
    echo "table created.. !"."</br>";
?>
</body>
</html>