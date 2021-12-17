<?php 
session_start();

if(!isset($_REQUEST['sophantu']))
{
    $sophantu = $_SESSION['sophantu'];
}
else{
    $sophantu=$_REQUEST['sophantu'];
    $_SESSION['sophantu'] = $sophantu;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lê Quốc Toàn</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <form action="" method="POST" class="form-horizontal">
            <?php 
                if(isset($_REQUEST['sophantu'])){
                    if(empty($_REQUEST['sophantu'])){
                        header('location: index.php');
                        exit();
                    }
                    $sophantu = $_SESSION['sophantu'];
                    
                    for ($i =0 ; $i < $sophantu; $i++)
                    {
                     echo '<label for="">Vận động viên '.($i+1).'</label>
                     <input type="text" name="hoten" id="hoten" placeholder="nhập họ tên">
                     <input type="number" name="tuoi" id="tuoi" placeholder="nhập tuổi">
                     <input type="text" name="monthidau" id="monthidau" placeholder="nhập môn thi đấu">
                     <input type="double" name="cannang" id="cannang" placeholder="nhập cân nặng">
                     <input type="double" name="chieucao" id="chieucao" placeholder="nhập chiều cao"><br/>';
                     
                    }
                    
                }
            ?>
            <input class="btn btn-primary mt-3" type="submit" value="Xem danh sách">
                <?php 
                include 'vandongvien.php';
                include 'arraylist.php';
                
                ?>
            </form>
            <div class="col-md mt-3">
            <a href="index.php" class="btn btn-primary">Quay lại trang trước</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>