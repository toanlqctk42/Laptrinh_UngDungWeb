<?php
 include 'connect.php';
 $query = "update computer set id = 09, name ='Thai Quy Quy' where id = 7009";
 $crtb = $con->query($query);
 if(!$crtb)
 {
 die("Table not updated. .!".$con->error);
 }
 echo "Table updated.. !"."</br>";
?>
