<!DOCTYPE html>
<html lang="en">
<?php include 'sanpham.php'; include 'hangsua.php'; include 'loaisua.php';?>
<?php
                if(isset($_POST["masua"])){

                    $target_dir = "uploads/";
                    if(!file_exists($target_dir))
                        mkdir("uploads/");

                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                
                    move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
                    $image=basename( $_FILES["hinhanh"]["name"]);

                    $sp = new sanpham("milkstory");
                    $result = $sp->Insert($_POST['masua'],$_POST['tensua'],$_POST['mahs'],$_POST['maloaisua'],$_POST['trongluong'],$_POST['dongia'],$_POST['thanhphan'],$_POST['loiich'],$image);
                    if($result)
                        header("Location: index.php");
                }
            ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
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
            <h2 class="text-center">Thêm Sản Phẩm mới</h2>
            <p><a class="btn btn-primary" href="index.php">Home</a></p>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="email">Mã Sản Phẩm</label>
                    <input type="text" class="form-control" id="masp" placeholder="Mã Sản Phẩm" name="masua">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="tensp" placeholder="Tên Sản Phẩm" name="tensua">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Hãng Sữa</label>
                    <?php 
                        $hs = new hangSua("milkstory");
                        $result = $hs->GetAll();
                        echo "<select name = 'mahs' id ='hangsua' class='form-select' aria-label='Default select example'>";
                        while($row=mysqli_fetch_array($result))
                        {
                            echo "<option value = '".$row['mahs']."'>".$row['tenhangsua']."</option>";
                        }
                        echo "</select>"
                    ?>
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Loại Sữa</label>
                    <?php 
                        $ls = new loaisua("milkstory");
                        $result = $ls->GetAll();
                        echo "<select name = 'maloaisua' id ='loaisua' class='form-select' aria-label='Default select example'>";
                        while($row=mysqli_fetch_array($result))
                        {
                            echo "<option value = '".$row['maloaisua']."'>".$row['tenloaisua']."</option>";
                        }
                        echo "</select>";
                    ?>
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Trọng Lượng</label>
                    <input type="number" class="form-control" id="trongluong" name="trongluong"
                        placeholder="(gr hoặc ml)">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Đơn Giá</label>
                    <input type="number" class="form-control" id="dongia" name="dongia" placeholder="(VNĐ)">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Thành Phần Dinh Dưỡng</label>
                    <input type="text" class="form-control" id="thanhphan" name="thanhphan" placeholder="nhập thành phần">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Lợi ích</label>
                    <input type="text" class="form-control" id="loiich" name="loiich" placeholder="nhập lợi ích">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Hình ảnh</label>
                    <input type="file" class="form-control" id="hinhanh" name="hinhanh" accept="image/*">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>