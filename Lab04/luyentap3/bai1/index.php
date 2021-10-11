<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lê Quốc Toàn</title>
</head>
<body>
 <?php
    include 'interface.php';
    // Create a list of animals
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);
    // Tell the animals to make a sound
    foreach($animals as $animal) {
    $animal->makeSound();
    }
 ?>
</body>
</html>