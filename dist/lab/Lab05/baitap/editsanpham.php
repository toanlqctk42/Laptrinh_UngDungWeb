<!DOCTYPE html>
<html lang="en">
<?php include 'sanpham.php'; include 'hangsua.php'; include 'loaisua.php';?>
<?php
    if(count($_POST)>0){
        $target_dir = "uploads/";
        if(!file_exists($target_dir))
            mkdir("uploads/");

        $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
        $image=basename( $_FILES["hinhanh"]["name"]);
        if($image == ""){
            $image = null;
        }
        $sp = new sanpham("milkstory");
        $result = $sp->Update($_GET['masua'],$_POST['masua'],$_POST['tensua'],$_POST['mahs'],$_POST['maloaisua'],$_POST['trongluong'],$_POST['dongia'],$_POST['thanhphan'],$_POST['loiich'],$image);
        if($result)
            header("Location: index.php");

    }
    if(isset($_GET['masua'])){
        $sp = new sanpham("milkstory");
        $sanpham = $sp->GetByID($_GET['masua']);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Sản Phẩm</title>
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
            <h2 class="text-center">Cập Nhật Sản Phẩm</h2>
            <p><a class="btn btn-primary" href="index.php">Home</a></p>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="email">Mã Sản Phẩm</label>
                    <input type="text" class="form-control" value = "<?php echo $sanpham['masua'] ?>" id="masp" placeholder="Mã Sản Phẩm" name="masua">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" value = "<?php echo $sanpham['tensua'] ?>" id="tensp" placeholder="Tên Sản Phẩm" name="tensua">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Hãng Sữa</label>
                    <?php 
                        $hs = new hangSua("milkstory");
                        $result = $hs->GetAll();
                        echo "<select name = 'mahs' id ='hangsua' class='form-select' aria-label='Default select example'>";
                        while($row=mysqli_fetch_array($result))
                        {
                            echo "<option value = '".$row['mahs']."' ".($row['mahs']==$sanpham['mahs']?"selected":"").">".$row['tenhangsua']."</option>";
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
                            echo "<option value = '".$row['maloaisua']."' ".($row['maloaisua']==$sanpham['maloaisua']?"selected":"").">".$row['tenloaisua']."</option>";
                        }
                        echo "</select>";
                    ?>
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Trọng Lượng</label>
                    <input type="number" class="form-control" value = "<?php echo $sanpham['trongluong'] ?>" id="trongluong" name="trongluong"
                        placeholder="(gr hoặc ml)">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Đơn Giá</label>
                    <input type="number" class="form-control" value = "<?php echo $sanpham['dongia'] ?>" id="dongia" name="dongia" placeholder="(VNĐ)">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Thành Phần Dinh Dưỡng</label>
                    <input type="text" class="form-control" value = "<?php echo $sanpham['thanhphan'] ?>" id="thanhphan" name="thanhphan">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Lợi ích</label>
                    <input type="text" class="form-control" value = "<?php echo $sanpham['loiich'] ?>" id="loiich" name="loiich">
                </div>
                <div class="form-group mt-2">
                    <label for="pwd">Hình ảnh</label>
                    <input type="file" class="form-control" value = "uploads/download (2).jpg" id="hinhanh" name="hinhanh" accept="image/*">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>