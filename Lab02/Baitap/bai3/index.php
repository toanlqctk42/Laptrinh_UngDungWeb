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
        <th scope="col-auto"><input type="number" name="diemtoan" id="diemtoan"> </input></th>
    </tr>
    <tr>
        <th scope="col-auto">Lý</th>
        <th scope="col-auto"><input type="number" name="diemly" id="diemly"> </input></th>
    </tr>
    <tr>
        <th scope="col-auto">Hoá</th>
        <th scope="col-auto"><input type="number" name="diemhoa" id="diemhoa"> </input></th>
    </tr>
    <tr>
        <th scope="col-auto">Điểm chuẩn</th>
        <th scope="col-auto"><input type="number" name="diemchuan" id="diemchuan"> </input></th>
    </tr>
    <tr>
        <th scope="col-auto">Tổng điểm</th>
        <th scope="col-auto">
        </th>
    </tr>
    <tr>
        <th scope="col-auto">Kết Quả</th>
        <th scope="col-auto"></th>
    </tr>
    <tr>
        <th scope="col-9"><input type="submit" name="submit" value = "submit"></th>
    </tr>
    </tbody>
    </table>
    
    </form>
</body>
</html>