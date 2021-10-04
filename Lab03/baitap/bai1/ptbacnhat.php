<?php 
function ptbacnhat( $a , $b)
{
    echo "Biến A = ".$a.'<br/>';
    echo "Biến B = ".$b.'<br/>';
    $kq =  (-$b/$a);
    echo "Kết quả = ".$kq;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeQuocToan</title>
    <style>
        .magincenter{
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class= "magincenter" >
    <form action="<?php $_PHP_SELF ?>" method="get">
    <input type="number" name= "bienA" placeholder="nhập biến a"><br/>
    <input type="number" name = "bienB" placeholder="nhập biến b"><br/>
    <input type="submit" name = "submit" value="xem kết quả"><br/>
    <?php
        if(isset($_GET["bienA"]) && isset($_GET["bienB"]) )
        {
            $bienA = $_GET["bienA"];
            $bienB = $_GET["bienB"];
            if($bienA == 0)
            {
                echo "Biến A không được bằng 0";
                exit();
            }
            if(empty($bienA) || empty($bienB))
            {
                echo "Bạn chưa nhập số , vui lòng nhập số";
                exit();
            }
            ptbacnhat($bienA , $bienB);
        }
        else{
            echo "Bạn chưa nhập số , vui lòng nhập số";
            exit();
        }
     ?>
</form>
</div>
</body>
</html>