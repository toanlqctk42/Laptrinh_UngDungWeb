<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Lê Quốc Toàn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0c397bfc39.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    <div id="kq">
        <h2>Department List</h2>
        <p>Danh sách các User hiện có </p>
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>NumberOfStaff</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            foreach($data["dpmList"] as $List){
            ?>
                    <tr>
                        <td><?php echo $List["ID"] ?></td>
                        <td><?php echo $List["Name"] ?></td>
                        <td><?php echo $List["NumberOfStaff"] ?></td>
                        <td>
                            <a href="thucthi.php?banghienthi=dpm&action=detail&id=<?php echo $List["ID"]?>">Detail</a>
                            <a href="thucthi.php?banghienthi=dpm&action=edit&id=<?php echo $List["ID"]?>"><i class="fas fa-edit"></i></a>
                            <a href="thucthi.php?banghienthi=dpm&action=delete&id=<?php echo $List["ID"]?>"><i class='far fa-trash-alt'></i></a>
                        </td>
                    </tr>
                    <?php
            }
            ?>
                </tbody>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Thêm Bộ Phận mới</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nhập tên bộ phận"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="tenbophan"
                                id="tenbophan">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    onclick="thembophanmoi()">Thêm</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary"><a href="index.php" class="badge badge-primary">Home</a></button>
        </table>
        <script>
        function thembophanmoi() {
            var tenmoi = document.getElementById('tenbophan').value;
            var reponse = new XMLHttpRequest();
            reponse.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('kq').innerHTML = this.responseText;
                }
            };
            reponse.open('GET', 'thucthi.php?banghienthi=dpm&action=insert&name=' + tenmoi);
            reponse.send();
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>