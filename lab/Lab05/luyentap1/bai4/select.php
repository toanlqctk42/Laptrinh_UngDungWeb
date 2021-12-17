<?php  
include 'connect.php';
$query = "SELECT * FROM computer ";
$result = $con->query($query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Branch:  " . $row["branch"]. "<br>";
    }
  } else {
    echo "0 results";
  }
?>