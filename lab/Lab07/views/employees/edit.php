<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lê Quốc Toàn</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
        <form action="" method="POST">
                <h1>Employee-Edit</h1>
                <table class="table table-dark">
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="id_new" value ="<?php echo $data["emp"]->ID?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value ="<?php echo $data["emp"]->Name?>"></td>
                    </tr>
                    <tr>
                        <td>SurName</td>
                        <td><input type="text" name="surname" value ="<?php echo $data["emp"]->Surname?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value ="<?php echo $data["emp"]->Email?>"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="phone" value ="<?php echo $data["emp"]->Phone?>"></td>
                    </tr>
                    <tr>
                        <td>Bộ Phận</td>
                        <td>
                            <select class="form-control" id="bophan" name="dpm_id">
                                <?php 
                                foreach($data['dpm'] as $bophan)
                                {
                                    echo "<option value='".$bophan['ID']."' ".($bophan['ID']==$data['emp']->ID_Depart ?"selected":"").">".$bophan['Name']."</option>";
                                }
                            ?>


                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Lưu">
                            <input type="submit" name="submit" value="Huỷ">
                        </td>
                    </tr>
                </table>
            </form>
            <?php 
            if(isset($_POST['submit']))
            {
                $mode = $_REQUEST['submit'];
                if($mode == "Huỷ")
                {
                    header("location:thucthi.php?banghienthi=emp");
                    exit();
                }
                else{
                    $id=$_REQUEST['id_new'];
                    $name = $_REQUEST['name'];
                    $surname =$_REQUEST['surname'];
                    $email = $_REQUEST['email'];
                    $phone = $_REQUEST['phone'];
                    $dpm_id =$_REQUEST['dpm_id'];
                    header("Location:thucthi.php?banghienthi=emp&action=update&emp_id=$id&name=$name&surname=$surname&email=$email&phone=$phone&dpm_id=$dpm_id");
                }
            }
            
            ?>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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