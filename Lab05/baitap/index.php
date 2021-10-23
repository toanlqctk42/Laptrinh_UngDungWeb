<!DOCTYPE html>
<html lang="en">
<?php 
  include 'hangsua.php';
  include 'khachhang.php';
  include 'sanpham.php';
  include 'loaisua.php';
  ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeQuocToan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/0c397bfc39.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="text-center">Chào mừng bạn đến với thế giới Milk</h2>
            <!-- List group -->
            <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Xem
                    Hãng Sữa</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Xem
                    Khách Hàng</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Xem Sản
                    Phẩm</a>
            </div>
            <div class="b-example-divider mt-5"></div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <h3 class="text-center">Thông tin hãng Sữa</h3>
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Mã Hãng Sữa</th>
                                <th>Tên Hãng Sữa</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                $hs = new hangSua("milkstory");
                $result = $hs->GetAll();
                while ($row =mysqli_fetch_array($result))
                {
                   echo"<tr>";
                   echo"<td>".$row['mahs']."</td>";
                   echo"<td>".$row['tenhangsua']."</td>";
                   echo"<td>".$row['diachi']."</td>";
                   echo"<td>".$row['dienthoai']."</td>";
                   echo"<td>".$row['email']."</td>";
                   echo"</tr>";
                }
                ?>
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <h3 class="text-center">Xem Danh Sách Khách Hàng </h3><a class="btn btn-primary"
                        href="addkhachhang.php">Thêm khách hàng</a>
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Mã Khách Hàng</th>
                                <th>Tên Khách Hàng</th>
                                <th>Giới Tính</th>
                                <th>Địa chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>E/D</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                $kh = new khachhang("milkstory");
                $result = $kh->GetAll();
                while ($row =mysqli_fetch_array($result))
                {
                   echo"<tr>";
                   echo"<td>".$row['makh']."</td>";
                   echo"<td>".$row['tenkh']."</td>";
                   if($row['gioitinh']==1)
                   {
                    echo'<td><i class="fas fa-male"></i></td>';
                   }
                   else 
                   {
                    echo'<td><i class="fas fa-female"></i></td>';
                   }
                   echo"<td>".$row['diachi']."</td>";
                   echo"<td>".$row['dienthoai']."</td>";
                   echo"<td>".$row['email']."</td>";
                   echo"<td>
                    <a href='editkhachhang.php?makh=".$row['makh']."'><i class='fas fa-edit'></i></a>
                    <a href='delkhachhang.php?makh=".$row['makh']."'><i class='far fa-trash-alt'></i></a>
                    </td>";
                   echo"</tr>";
                }
                ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                    <h3 class="text-center">Xem Sản Phẩm </h3><a class="btn btn-primary" href="addsanpham.php">Thêm
                        Sản Phẩm</a>
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>STT</th>
                                <th>Tên Sữa</th>
                                <th>Hãng Sữa</th>
                                <th>Loại Sữa</th>
                                <th>Trọng Lượng</th>
                                <th>Đơn Giá</th>
                                <th>E/D</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                $sp = new sanpham("milkstory");
                $result = $sp->GetAll();
                while ($row =mysqli_fetch_array($result))
                {
                    echo"<tr>";
                    echo"<td>".$row['masua']."</td>";
                    echo"<td>".$row['tensua']."</td>";
                    $has = new hangSua("milkstory");
                    $hangsua= $has->GetByID($row['mahs']);
                    echo"<td>".$hangsua['tenhangsua']."</td>";
                    $ls = new loaisua("milkstory");
                    $loaisua= $ls->GetByID($row['maloaisua']);
                    echo"<td>".$loaisua['tenloaisua']."</td>";
                    echo"<td>".$row['trongluong']."</td>";
                    echo"<td>".$row['dongia']."</td>";
                    echo"<td>
                        <a href=''><i class='fas fa-edit'></i></a>
                        <a href='delsanpham.php?masua=".$row['masua']."'><i class='far fa-trash-alt'></i></a>
                        </td>";
                    echo"</tr>";
                }
                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>