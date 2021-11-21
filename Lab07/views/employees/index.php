<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Example PHP+PDO+POO+MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Employee List</h2>
        <p>Danh sách các User hiện có | <a href="views/addemp.php">Thêm mới</a> </p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Phòng Ban</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach($data["empList"] as $List){
            ?>
                            <tr>
                                <td><?php echo $List["ID"] ?></td>
                                <td><?php echo $List["Name"] ?></td>
                                <td><?php echo $List["Surname"] ?></td>
                                <td><?php echo $List["Email"] ?></td>
                                <td><?php echo $List["Phone"] ?></td>
                                <td>
                                    <a href="index.php?action=detail&id=<?php echo $List["ID"]?>">Detail</a>
                                </td>
                            </tr>
                            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>