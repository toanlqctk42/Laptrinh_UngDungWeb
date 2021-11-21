<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Example PHP+PDO+POO+MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Department List List</h2>
        <p>Danh sách các User hiện có | <a href="views/department/addbophan.php">Thêm mới</a> </p>
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