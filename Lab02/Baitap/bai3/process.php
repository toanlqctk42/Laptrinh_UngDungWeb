<?php
if(!isset($_REQUEST['submit']))
{
    header('location : index.php');
}
$dt = $_REQUEST['diemtoan'];
$dl = $_REQUEST['diemly'];
$dh = $_REQUEST['diemhoa'];
$dc = $_REQUEST['diemchuan'];
$diemtong = $dt + $dl +$dh ;
$dau_rot = $diemtong >= $dc ? 'Đậu' : 'Rớt';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .canhgiua{
            margin: 0 auto ;
        }
    </style>
</head>
<body>
    <h3 class="text-center">Kết quả thi đại học </h3>
    <form action="process.php" method="post">
    <table class = " table-responsive-lg table-dark  canhgiua">
    <tbody class="table-sm">
    <tr>
        <th scope="col-auto">Toán</th>
        <th scope="col-auto"><?php echo $dt?></th>
    </tr>
    <tr>
        <th scope="col-auto">Lý</th>
        <th scope="col-auto"><?php echo $dl?></th>
    </tr>
    <tr>
        <th scope="col-auto">Hoá</th>
        <th scope="col-auto"><?php echo $dh?></th>
    </tr>
    <tr>
        <th scope="col-auto">Điểm chuẩn</th>
        <th scope="col-auto"><?php echo $dc?></th>
    </tr>
    <tr>
        <th scope="col-auto">Tổng điểm</th>
        <th scope="col-auto"><?php echo $diemtong ?>
        </th>
    </tr>
    <tr>
        <th scope="col-auto">Kết Quả</th>
        <th scope="col-auto"><?php echo $dau_rot ?></th>
    </tr>
    <tr>
        <th scope="col-9"><a href="index.php">Quay lại trang trước</a></th>
    </tr>
    </tbody>
    </table>
    
    </form>
</body>
</html>