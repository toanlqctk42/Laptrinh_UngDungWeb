<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lê Quốc Toàn</title>
</head>
<body>
 <?php
    include 'fruit.php';
    include 'strawberry.php';
    $strawberry = new Strawberry("Strawberry", "blue");
    $strawberry->message();
    $strawberry->intro();
 ?>
</body>
</html>