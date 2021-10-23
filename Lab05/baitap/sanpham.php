<?php 
    require_once 'entity.php';
    class sanpham extends Entity{
        public function GetAll()
        {
            return $this->mysql->GetAll("sua");
        }

        public function GetByID($masua)
        {
            $query = "select * from sua where masua = '$masua'";
            $result = $this->mysql->MyQuery($query);
            return mysqli_fetch_array($result);
        }

        public function Insert($masua,$tensua,$hangsua,$loaisua,$trongluong,$dongia,$thanhphan,$loiich,$hinhanh)
        {
            $query = "insert into sua values ('$masua', '$tensua', '$hangsua', '$loaisua', $trongluong , $dongia , '$thanhphan', '$loiich', '$hinhanh')";
            return $this->mysql->MyQuery($query);
        }

        public function Update($masuaold,$masuanew,$tensua,$hangsua,$loaisua,$trongluong,$dongia,$thanhphan,$loiich,$hinhanh)
        {
            $query ="update sua set masua = '$masuanew'
            , tensua = '$tensua'
            , mahs = '$hangsua'
            , maloaisua = '$loaisua'
            ,trongluong = $trongluong 
            , dongia = $dongia 
            , thanhphan = '$thanhphan'
            ,loiich = '$loiich'
            ,hinhanh = '$hinhanh' where masua = '$masuaold'";
            return $this->mysql-> MyQuery($query);
        }

        public function Delete($masua)
        {
            $query = "delete from sua where masua = '$masua'";
            return $this->mysql->MyQuery($query);
        }
    }
?>