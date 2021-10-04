<?php 
function ptbachai($bienA , $bienB, $bienC)
{
    echo "Biến A = ".$bienA.'<br/>';
    echo "Biến B = ".$bienB.'<br/>';
    echo "Biến C = ".$bienC.'<br/>';
    $delta = 0;   
    if($bienB%2 == 0)
    {
        $delta = (($bienB/2) * ($bienB/2)) - $bienA*$bienC;
        if($delta < 0)
        {
            echo "Phương trình vô nghiệm ";
            exit();
        }
        else if($delta == 0 ) {
            $kq = -($bienB/$bienA);
            echo "Phương trình có nghiệm kép là : ".$kq;
        }
        else{
            echo "Phương trình có 2 nghiệm";
            $kq1 = ((-$bienB/2) + sqrt($delta))/($bienA);
            $kq2 = ((-$bienB/2) - sqrt($delta))/($bienA);
            echo "nghiệm thứ nhất : ".$kq1.'<br/>'."nghiệm thứ hai : ".$kq2;
        }
    }
    else
    {
        $delta = ($bienB * $bienB) - (4*$bienA*$bienC);
        if($delta < 0)
        {
            echo "Phương trình vô nghiệm ";
            exit();
        }
        else if($delta == 0 ) {
            $kq = -($bienB/(2*$bienA));
            echo "Phương trình có nghiệm kép là : ".$kq;
        }
        else{
            echo "Phương trình có 2 nghiệm <br/>";
            $kq1 = (-$bienB + sqrt($delta))/(2*$bienA);
            $kq2 = (-$bienB - sqrt($delta))/(2*$bienA);
            echo "nghiệm thứ nhất : ".$kq1.'<br/>'."nghiệm thứ hai : ".$kq2;
        }
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
<form action="<?php $_PHP_SELF ?>" method="get">
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
        if(isset($_GET['bienA'])&& isset($_GET['bienB']) && isset($_GET['bienC']))
        {
            $A = $_GET['bienA'];
            $B = $_GET['bienB'];
            $C = $_GET['bienC'];

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

            ptbachai($A,$B,$C);
        }
        
        ?></th>
    </tr>
    </tbody>
    </table>
    
    </form>
</body>
</html>