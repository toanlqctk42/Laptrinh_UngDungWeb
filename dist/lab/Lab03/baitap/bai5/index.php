<?php
session_start();
$file = [];
if(isset($_SESSION['file'])&&isset($_SESSION['size'])):
  $file = $_SESSION['file'];
  $size = $_SESSION['size'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lê Quốc Toàn</title>
  </head>
  <body>
    <div class="container mt-4 bg-success">
        <div class="row justify-content-center">
            <form method="$_POST" action="loadfolder.php">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chọn thư mục</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="folder_name">
                    <option value="download">download</option>
                    <option value="picture">picture</option>
                    <option value="screen">screen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Chọn size hình ảnh</label>
                    <select class="form-control" id="exampleFormControlSelect1" name = "image_size">
                    <option value="100">100x100</option>
                    <option value="200">200x200</option>
                    <option value="300">300x300</option>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        <?php if(!empty($file) && !empty($size)):?>
        </div>
        <div class="row justify-content-center">
        <p class="text-center">Tất cả ảnh trong thư mục</p>
          <div class="col-md-6 d-flex flex-nowrap" >
            <?php foreach($file as $files): ?>
              <div class ="m-3">
                <img src="<?php echo $files; ?>" alt="" width="<?php echo $size;?>" height="<?php echo $size;?>">
              </div>

            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php endif ;?>