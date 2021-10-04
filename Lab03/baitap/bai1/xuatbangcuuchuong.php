<?php
function xuatcuuchuong($n)
{
    for($i = 1; $i <= 10 ;$i++)
    {
        $kq = $n * $i;
        echo "$n * $i = $kq".'<br/>';
    }
}
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
    <form action="<?php $_PHP_SELF ?>" method="post">
        Nhập N : <input type="number" name = "bienN" placeholder="Nhập n"><br/>
        <input type="submit" value="Xem Bảng Cửu Chương" ><br/>
        <?php
            if(isset($_REQUEST['bienN']))
            {
                $bienN = $_REQUEST['bienN'];
                if(empty($bienN))
                {
                    echo "Vui lòng nhập số ";
                    exit();
                }
                xuatcuuchuong($bienN);
            }
        ?>
    </form>
</body>
</html>