<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>LeQuocToan</title>
</head>
<body>
<?php
$MAX_FILE_SIZE = 1000000;
// Step 1: Checking is method POST?
if ($_SERVER["REQUEST_METHOD"] != "POST" ) {
echo 'Upload not sucessfull (not POST)';
exit(-1);
} //end if
// Step 2: Checking upload processing.
if ( !isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] != 0 ) {
echo 'Upload not sucessfull (error upload processing)';
exit(-1);
} //end if
// Step 3: Checking is upload file size.
// Step 3: Checking is upload file size.
if ($_FILES["file_upload"]["size"] > $MAX_FILE_SIZE) {
echo "Upload not sucessfull (file size too large".$_FILES['file_upload']['size'].")";
exit(-1);
}
// Step 4: splite file name and check extension of file.
// Step 4: splite file name and check extension of file.
$temp = preg_split('/[\/\\\\]+/', $_FILES["file_upload"]["name"]);
$filename = $temp[count($temp)-1];
if (!preg_match('/\.(jpg|bmp|gif|png)$/i', $filename)){
echo 'Upload not sucessfull <br>';
echo 'Please, upload image file <br>';
exit(-1);
} //end if
// Step 5: move uploaded file to folder of server.
$upload_dir = "upload";
if(!file_exists($upload_dir))
    mkdir("upload");
$upload_file = $upload_dir."/".$filename;
    if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $upload_file) ) {
        echo "Uploaded: ".$_FILES["file_upload"]["name"]."<br />";
        echo "Type: ".$_FILES["file_upload"]["type"]."<br />";
        echo "Size: ".($_FILES["file_upload"]["size"]/1024)." Kb<br />";
    }
    else {
    echo 'Upload not sucessfull (error on server)';
}
?>
</body>
</html>