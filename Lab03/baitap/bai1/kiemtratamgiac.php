<?php
function kttamgiac($a, $b, $c)
{
   if(($a + $b) > $c || ($a + $c) > $b || ($b + $c) > $a)
   {
       echo "Tam giác hợp lệ <br/> ";
       $a2=$a*$a;
        $b2=$b*$b;
        $c2=$c*$c;
        
        if ($a == $b && $b == $c) {
                $tam_giac = 'Tam giác đều';
        }
        else if ($a == $b || $a == $c || $c == $b)  {
                if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
                    $tam_giac = 'Tam giác vuông cân';
                }
        else {
                    $tam_giac = 'Tâm giác cân';
                }
        }
            
        else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
                $tam_giac= 'Tam giác vuông';
        }
            
        else {
                $tam_giac = 'Tam giác thường';
        }

        echo "Đây là : ".$tam_giac;
    }
   else{
       echo "Tam giác không hợp lệ ";
       exit();
   }
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
    <style>
        .canhgiua{
            margin: 0 auto ;
        }
    </style>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="post">
    <table class = " table-responsive-lg table-dark  canhgiua">
    <tbody class="table-sm">
    <tr>
        <th scope="col-auto">Biến A</th>
        <th scope="col-auto"><input type="number" name="bienA" placeholder="Nhập biến A"></input></th>
    </tr>
    <tr>
        <th scope="col-auto">Biến B</th>
        <th scope="col-auto"><input type="number" name="bienB" placeholder="Nhập biến B"> </input></th>
    </tr>
    <tr>
        <th scope="col-auto">Biến C</th>
        <th scope="col-auto"><input type="number" name="bienC" placeholder="Nhập biến C"> </input></th>
    </tr>
    <tr>
        <th scope="col-9"><input type="submit" name="submit" value = "Xem Kết Quả"></th>
    </tr>
    <tr>
        <th scope="col-auto"> <?php 
        if(isset($_REQUEST['bienA'])&& isset($_REQUEST['bienB']) && isset($_REQUEST['bienC']))
        {
            $A = $_REQUEST['bienA'];
            $B = $_REQUEST['bienB'];
            $C = $_REQUEST['bienC'];

            if(empty($A) || empty($B) || empty($C))
            {
                echo "Vui lòng nhập đủ số";
                exit();
            }

            if($A == 0)
            {
                echo "Biến A phải khác 0";
                exit();
            }

            kttamgiac($A,$B,$C);
        }
        
        ?></th>
    </tr>
    </tbody>
    </table>
    
    </form>
</body>
</html>