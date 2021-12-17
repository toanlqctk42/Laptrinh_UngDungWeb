<?php


    function dthinhtron($bankinh)
    {
        echo ($bankinh * $bankinh * 3.14);
    }

    function chuvihinhtron($bankinh)
    {
        echo (2* $bankinh * 3.14);
    }

    function dthinhchunhat($chieudai,$chieurong)
    {
        echo ($chieudai * $chieurong);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Lê Quốc Toàn</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
<table class="table table-striped table-dark table-responsive-lg">
   <thead class="table-sm">
      <tr>
         <th scope="col-auto" >Diện tích và chu vi hình tròn</th>
      </tr>
   </thead>
   <tbody class="table-sm">
      <tr>
         <td scope="col-auto">
             Bán kính
         </td>
         <td>
             <input type="number" name = "bankinh" placeholder="nhập bán kính"> 
         </td>
      </tr>
      <tr>
         <td scope="col-auto">
             Diện tích 
         </td>
         <td><input type="number" value=
            <?php 
                if(isset($_REQUEST['bankinh']))
                {
                    $r = $_REQUEST['bankinh'];
                    if(!empty($r))
                    {
                        if($r > 0)
                        {
                            dthinhtron($r);
                        }
                    }

                }
           ?> readonly></td>
      </tr>
      <tr>
         <td scope="col-auto">
             Chu Vi 
         </td>
         <td><input type="number" value=<?php 
                if(isset($_REQUEST['bankinh']))
                {
                    $r = $_REQUEST['bankinh'];
                    if(!empty($r))
                    {
                        if($r > 0)
                        {
                            chuvihinhtron($r);
                        }
                    }

                }
           ?> readonly></td>
      </tr>
      <tr>
         <td scope="col-auto">
            <input type="submit" value="Tính">
         </td>
      </tr>
   </tbody>
</table>
</form>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table class="table table-striped table-dark table-responsive-lg">
   <thead class="table-sm">
      <tr>
         <th scope="col-auto" >Diện tích và chu vi hình tròn</th>
      </tr>
   </thead>
   <tbody class="table-sm">
      <tr>
         <td scope="col-auto">
             Chiều Dài
         </td>
         <td>
             <input type="number" name = "chieudai" placeholder="nhập chiều dài"> 
         </td>
      </tr>
      <tr>
         <td scope="col-auto">
             Chiều Rộng 
         </td>
         <td><input type="number" name="chieurong" placeholder="nhập chiều rộng"></td>
      </tr>
      <tr>
         <td scope="col-auto">
             Diện tích 
         </td>
         <td><input type="number" value=<?php 
                if(isset($_REQUEST['chieudai'])&& isset($_REQUEST['chieurong']))
                {
                    $cdai = $_REQUEST['chieudai'];
                    $crong = $_REQUEST['chieurong'];
                    if(!empty($cdai)&&!empty($crong))
                    {
                        if($cdai > 0 && $crong > 0)
                        {
                            dthinhchunhat($cdai , $crong);
                        }
                    }

                }
           ?> readonly></td>
      </tr>
      <tr>
         <td scope="col-auto">
            <input type="submit" value="Tính">
         </td>
      </tr>
   </tbody>
</table>
</form>
</body>
</html>