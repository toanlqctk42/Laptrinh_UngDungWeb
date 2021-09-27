<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
</head>
<body>
    <form action="ketquapheptinh.php" method="post">
        <label for="so_a">Số a :</label>
        <input type="number" name = "so_a" id="so_a"><br/>
        <label for="so_b">Số b :</label>
        <input type="number" name = "so_b" id = "so_b"><br/>
        <label for="Chonpheptinh">Chọn Phép Tính : </label>
        <input type="radio" name="pheptinh" id="phepcong" value="+" checked><label for="phepcong"> Cộng</label>
        <input type="radio" name="pheptinh" id="pheptru" value="-" ><label for="pheptru"> Trừ</label>
        <input type="radio" name="pheptinh" id="phepnhan" value="*" ><label for="phepnhan"> Nhân</label>
        <input type="radio" name="pheptinh" id="phepchia" value="/" ><label for="phepchia"> Chia</label>
        <br/>
        <input type="submit" name ="cmdtinh" value="xem kết quả ">
    </form>
</body>
</html>