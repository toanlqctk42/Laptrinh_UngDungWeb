<?php 
    function USCLN($a, $b)
    {
        if ($b == 0) return $a;
        return USCLN($b, $a % $b);
    }
    
    function BSCNN($a, $b)
    {
        return ($a * $b) / USCLN($a, $b);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <table class="table table-dark">
        <tr>
            <th>
            Nhập số A : <input type="number" name ="bienA" placeholder="nhập biến A"><br/>
            </th>
        </tr>
        <tr>
            <th>
            Nhập số B : <input type="number" name = "bienB" placeholder="nhập biến B"><br/>
            </th>
        </tr>
        <tr>
            <th>
            <input type="submit" value="Xem kết quả"><br/>
            </th>
        </tr>
        <tr>
            <th>
            <?php 
                if(isset($_REQUEST['bienA'])&& isset($_REQUEST['bienB']))
                {
                    $bienA = $_REQUEST['bienA'];
                    $bienB = $_REQUEST['bienB'];

                    if(empty($bienA) || empty($bienB))
                    {
                        echo "vui lòng nhập đầy đủ số";
                        exit();
                    }
                    
                    echo ("USCLN của $bienA và $bienB là: " . USCLN($bienA, $bienB)) . "<br>";
                    echo ("BSCNN của $bienA và  $bienB là: " . BSCNN($bienA, $bienB));
                }
            ?>
            </th>
        </tr>
    </table>
    </form>
</body>
</html>