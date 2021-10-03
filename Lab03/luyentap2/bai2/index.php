<?php
session_start();
$_SESSION["name"]="Anil";
$_SESSION["Password"]="nil";
echo "set session";
?>
<html>
<head>
<title>LeQuocToan</title>
</head>
<body>

<br/>
<a href="getsession.php">Go to getsession</a>
</body>
</html>