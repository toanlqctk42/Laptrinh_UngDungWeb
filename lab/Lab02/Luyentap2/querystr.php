<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Demo input</title>
</head>
<body>
Information:
    <?php       
        echo "Fullname: ".$_GET["username"]."<br/>";
        echo "Password: ".$_GET["pass"]."<br/>";
        if(isset($_GET["gender"])) {
             echo "Gender: ".$_GET["gender"]."<br/>";
        }
        echo "Branch: ".$_GET["branch"]."<br/>";
    ?>
</body>
</html>
