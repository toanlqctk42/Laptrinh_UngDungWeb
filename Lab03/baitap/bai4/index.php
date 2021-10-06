<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" id ="filepath" name="filepath" value=
        <?php 
        
        $MAX_FILE_SIZE = 1000000;

        if ($_SERVER["REQUEST_METHOD"] != "POST" ) {
        echo 'Upload not sucessfull (not POST)';
        exit(-1);
        } 
    
        if ( !isset($_FILES["fileupload"]["error"]) || $_FILES["fileupload"]["error"] != 0 ) {
        echo 'Upload not sucessfull (error upload processing)';
        exit(-1);
        } 
    
        if ($_FILES["fileupload"]["size"] > $MAX_FILE_SIZE) {
        echo "Upload not sucessfull (file size too large".$_FILES['fileupload']['size'].")";
        exit(-1);
        }
    
        $temp = preg_split('/[\/\\\\]+/', $_FILES["fileupload"]["name"]);
        $filename = $temp[count($temp)-1];
        if (!preg_match('/\.(jpg|bmp|gif|png)$/i', $filename)){
        echo 'Upload not sucessfull <br>';
        echo 'Please, upload image file <br>';
        exit(-1);
        }
            echo $_FILES["fileupload"]["tmp_name"];
        ?>
        >
        <button style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()">Browse</button>
        <input type='file' name="fileupload" id="getFile" style="display:none"> 
    </form>
    <form action="upload.php">
        <input type="submit" value="Xem thuộct tính">
    </form>
</body>
</html>