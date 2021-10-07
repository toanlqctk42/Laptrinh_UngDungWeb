<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lê Quốc Toàn</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name = "fileupload">
                            <label class="custom-file-label" for="customFile">Chọn file</label>
                            <input class="btn btn-dark" type="submit" value="Xem thuộc tính">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>