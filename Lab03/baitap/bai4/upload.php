<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <div class ="row justify-content-center">
            <div class="col-md-7">
                <div class="card mt-5">
                    <div class = "card-title">Thông tin File</div>
                <?php 
                if(isset($_FILES["fileupload"]["name"])&&isset($_FILES["fileupload"]["type"])&&isset($_FILES["fileupload"]["size"]))
                {
                    if(empty($_FILES["fileupload"]["name"])||empty($_FILES["fileupload"]["type"])||empty($_FILES["fileupload"]["size"]))
                    {
                        echo '<div class="card-text"> file rỗng</div>'."<br/>";
                    }
                    else{
                    echo '<div class="card-text">';
                    echo "File Name :  ".$_FILES["fileupload"]["name"]."<br/>";
                    echo "File Type :  ".$_FILES["fileupload"]["type"]."<br/>";
                    echo "File Size :  ".$_FILES["fileupload"]["size"]."<br/>";   
                    echo '</div>';
                    }
                }
                else{
                    echo "Không lấy được thông tin file";
                }
                ?>
                </div>
            <a href="index.php" class="btn btn-dark">Chọn file khác</a>
            </div>
        </div>
    </div>
</body>
</html>