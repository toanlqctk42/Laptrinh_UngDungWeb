<?php 
    require_once 'entity.php';  
   class khachhang extends Entity {
       public function GetAll()
       {
           return $this->mysql->GetAll("khachhang");
       }

       public function GetByID($makh)
       {
           $query = "select * from khachhang where makh='$makh'";
           $result = $this->mysql-> MyQuery($query);
           return mysqli_fetch_array($result);
       }

       public function Insert($makh, $tenkh, $gioitinh,$diachi,$dienthoai,$email)
       {
           $query = "insert into khachhang values ('$makh', '$tenkh', $gioitinh , '$diachi','$dienthoai', '$email')";
           return $this->mysql->MyQuery($query);
       }

       public function Update($makhold, $makhnew, $tenkh,$gioitinh,$diachi,$dienthoai,$email)
       {
           $query = "update khachhang set makh='$makhnew'
                                       , tenkh = '$tenkh'
                                       , gioitinh = $gioitinh 
                                       , diachi = '$diachi'
                                       , dienthoai = '$dienthoai'
                                       , email = '$email'
                                        where makh='$makhold'";
            return $this->mysql-> MyQuery($query);
       }

       public function Delete($makh)
       {
           $query = "delete from khachhang where makh = '$makh'";
           return $this->mysql-> MyQuery($query);
       }
   }
?>