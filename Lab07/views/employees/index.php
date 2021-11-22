<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Example PHP+PDO+POO+MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0c397bfc39.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h2>Employee List</h2>
        <p>Danh sách các User hiện có </p>
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
                    <td><?php echo $List["ID_Depart"] ?></td>
                    <td>
                        <a href="thucthi.php?banghienthi=emp&action=detail&id=<?php echo $List["ID"]?>">Detail</a>
                        <a href="thucthi.php?banghienthi=emp&action=edit&id=<?php echo $List["ID"]?>"><i
                                class="fas fa-edit"></i></a>
                        <a href="thucthi.php?banghienthi=emp&action=delete&id=<?php echo $List["ID"]?>"><i
                                class='far fa-trash-alt'></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>

        </table>
        <button class="btn btn-primary"><a href="index.php" class="badge badge-primary">Home</a></button>
    </div>
</body>

</html>