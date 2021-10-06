<?php
    session_start();

    if (!isset($_POST['so_a'])) {
        $so_a = $_SESSION['so_a'];
    }
    else {
        $so_a = $_POST['so_a'];
        $_SESSION['so_a'] = $so_a;
    }

    if (!isset($_POST['so_b'])) {
        $so_b = $_SESSION['so_b'];
    }
    else {        
        $so_b = $_POST['so_b'];
        $_SESSION['so_b'] = $so_b;
    }

    if (!isset($_POST['pheptinh'])) {
        $so_b = $_SESSION['pheptinh'];
    }
    else {
        $phep_tinh = $_POST['pheptinh'];
        $_SESSION['pheptinh'] = $phep_tinh;
    }

    $_SESSION['cmdtinh'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
</head>
<body>
<?php 
$ketqua = "";
 if(isset($_SESSION["cmdtinh"]))
 {
     $so_a = $_SESSION["so_a"];
     $so_b = $_SESSION["so_b"];
     $pt = $_SESSION["pheptinh"];
     echo '<label for="so_a"> Số a = </label>'.$so_a.'<br/>';
     echo '<label for="so_b"> Số b = </label>'.$so_b.'<br/>';
     switch($pt)
     {
        case "+" :
            $ketqua = "$so_a + $so_b = ".($so_a + $so_b);
            break;
        case "-" :
           $ketqua = "$so_a - $so_b = ".($so_a - $so_b);
            break;
        case "*" :
            $ketqua = "$so_a * $so_b = ".($so_a * $so_b);
            break;
        case "/" :
            if($so_b == 0)
            {
                echo "Phép tính sai".'<br/>';
                echo '<a href="pheptinh.php">Quay lại trang trước</a>';
                return;
            }
           $ketqua = "$so_a / $so_b = ".($so_a / $so_b);
            break;
     };
     echo '<label for="ketqua"> Kết Quả = </label>'.$ketqua.'<br/>';
 }
?>
<a href="pheptinh.php">Quay lại trang trước</a>
</body>
</html>
