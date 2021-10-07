<?php
    session_start();

    if(isset($_REQUEST['folder_name'])&&isset($_REQUEST['image_size']))
    {
        $folder_name = $_REQUEST['folder_name'];
        $image_size = $_REQUEST['image_size'];

        $folder_path = __DIR__.'/upload/' .$folder_name;
        
        $file = scandir($folder_path);

        $file_new = [];

        for($i = 2; $i < count($file); $i++)
        {
            $path = 'upload/' . $folder_name . '/' . $file[$i];
            array_push($file_new , $path);
        }
        $_SESSION['file'] = $file_new;
        $_SESSION['size'] = $image_size;
        header('Location:index.php');
        
        exit();
    }
?>