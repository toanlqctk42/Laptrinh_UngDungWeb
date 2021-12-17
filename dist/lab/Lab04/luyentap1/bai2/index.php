<?php
    include 'student.php';
    $student = new Students("John", "Doe", "10/33 ABC, Da Lat");
    echo $student->greeting()."<br/>";
    echo $student->getAddress();
 ?>