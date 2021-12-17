<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Quốc Toàn</title>
    <style>
        ul li {
            list-style: number_format;
            font-size: 20px;
        }
    </style>
    
</head>
<body>
    <h1>Mảng 1 chiều</h1>
    <ul>
        <li>Xây dựng hàm nhập/xuất mảng</li>
        <?php
        echo '<form method = "post" >';
            for ($i = 0; $i < 5; $i++){ 
                echo "<input type=number name=nhapmang$i>"."<br>";
            }
        echo    '<input type="submit" value="submit">';
        echo '</form>';
        ?>
        <?php
            $data = array();
            if(isset($_POST['nhapmang0'])){
                for ($i=0; $i < 5; $i++) { 
                    $data[$i]= $_POST['nhapmang' . $i];
                }
                echo "<br>";
                print_r($data);
            }
        ?>
        <li>Viết hàm tìm phần tử Max, min trong mảng</li>
        <?php
        function find_Max_Min($data)
        {
            echo "Min  = ";
            echo min($data)."<br>";
            echo "Max = ";
            echo max($data);
        }
        find_Max_Min($data);
        ?>
        <li>Sắp xếp tăng dần , giảm dần</li>
        <?php
        function tangdan($pata)
        {
            sort($pata);
            echo "Mảng sắp xếp tăng dần : ";
            foreach ($pata as $value) {
                echo $value."  |   ";
            }
        }
        function giamdan($pata)
        {
            rsort($pata);
            echo "<br> Mảng sắp xếp giảm dần :";
            foreach ($pata as $value) {
                 echo $value."  |   ";
            }
        }

        tangdan($data);

        giamdan($data);
        ?>
        <li>Tìm phần tử có giá trị x trong mảng</li>

        <form method= "post" >
           <input type= "number" name= "giatrix" >
           <input type="button" name="submit" value="submit" onclick="find_X($data,$_POST['giatrix'])">
        </form>
        <?php 
            function find_X(array $pata , $number)
            {
                $is_correct = in_array($number , $pata);
                $location = null;
                if($is_correct)
                {
                    foreach ($pata as $key => $value) {
                        # code...
                        if($value == $number)
                        {
                            $location = $key;
                        }
                    }
                    echo 'tìm thấy phần tử '.$number.' tại vị trí '.$location;
                }
                else{
                    echo 'tìm không thấy phần tử '.$number;
                }
            }

            
        ?>
        <?php 
            
            if(isset($_REQUEST['submit']))
            {
                echo "bạn đã vào được đến đây";
                find_X($data, $_REQUEST['giatrix']);
            }

        ?>
        <li>Cập nhật giá trị cho phần tử có giá trị x trong mảng</li>
        <li>Xoá phần tử có giá trị x trong mảng</li>
    </ul>
    <h1>Mảng 2 chiều</h1>
    <ul>
        <li>Xây dựng hàm nhập / xuất mảng</li>
        <li>Xuất các phần tử trên đường chéo chính / chéo phụ</li>
        <li>Sắp xếp mảng giảm dần theo chiều kim đồng hồ</li>
    </ul>
</body>
</html>