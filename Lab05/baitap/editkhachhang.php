<!DOCTYPE html>
<html lang="en">
<?php include 'khachhang.php'?>
<?php 
    if(count($_POST)>0){
        $kh = new khachhang("milkstory");
        $result = $kh->Update($_GET['makh'],$_POST['makh'],$_POST['tenkh'],$_POST['gioitinh'],$_POST['diachi'],$_POST['dienthoai'],$_POST['email']);
        if($result)
            header("Location: index.php");
    }
    if(isset($_GET['makh'])){
        $kh = new khachhang("milkstory");
        $khachhang = $kh->GetByID($_GET['makh']);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Khách Hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <h2 class="text-center">Thêm Khách Hàng mới</h2>
            <p><a href="index.php">Home</a></p>
            <form action="" method="post">
                <div class="form-group mt-2">
                    <label for="email">Mã Khách Hàng</label>
                    <input type="text" class="form-control" value="<?php echo $khachhang['makh']; ?>" id="makh"
                        placeholder="Mã khách hàng" name="makh">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Tên Khách Hàng</label>
                    <input type="text" class="form-control" value="<?php echo $khachhang['tenkh']; ?>" id="tenkh"
                        placeholder="Họ tên" name="tenkh">
                </div>
                <div class="form-group mt-2">
                    <?php 
                        if($khachhang['gioitinh'] == 1)
                        {
                            echo "<div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='gioitinh' id='rdnam' value='1' checked = 'checked'>
                            <label class='form-check-label' for='rdnam'>Nam</label>
                            </div>
                            <div class='form-check form-check-inline'>
                                <input class='form-check-input' type='radio' name='gioitinh' id='rdnu' value='0'>
                                <label class='form-check-label' for='rdnu'>Nữ</label>
                            </div>";
                        }
                        else
                        {
                            echo "<div class='form-check form-check-inline'>
                            <input class='form-check-input' type='radio' name='gioitinh' id='rdnam' value='1'>
                            <label class='form-check-label' for='rdnam'>Nam</label>
                            </div>
                            <div class='form-check form-check-inline'>
                                <input class='form-check-input' type='radio' name='gioitinh' id='rdnu' value='0' checked = 'checked'>
                                <label class='form-check-label' for='rdnu'>Nữ</label>
                            </div>";
                        }
                    ?>

                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Địa chỉ</label>
                    <input type="text" class="form-control" value="<?php echo $khachhang['diachi']; ?>" id="diachi"
                        name="diachi">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Điện Thoại</label>
                    <input type="text" class="form-control" value="<?php echo $khachhang['dienthoai']; ?>"
                        id="dienthoai" name="dienthoai">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Email</label>
                    <input type="text" class="form-control" value="<?php echo $khachhang['email']; ?>" id="email"
                        name="email">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>
            </form>
        </div>
    </div>
</body>

</html>