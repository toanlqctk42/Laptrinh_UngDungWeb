<?php
 require_once 'entity.php';
 class SinhVien extends Entity{
    public function GetAll(){
        return $this->mysql->GetAll("sinhvien");
    }
    public function GetByID($mssv){
        $query = "select * from sinhvien where MSSV='".$mssv."'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
    public function Insert($mssv,$hoten,$tuoi,$lop){
        $query = "insert into sinhvien values ('".$mssv."','".$hoten."',".$tuoi.",'".$lop."')";
        return $this->mysql->MyQuery($query);
    }
    public function Delete($mssv){
        $query = "delete from sinhvien where mssv = '".$mssv."'";
        return $this->mysql->MyQuery($query);
    }
    public function Update($mssvold, $mssvnew,$hoten,$tuoi,$lop){
        $query = "update sinhvien set mssv = '".$mssvnew
        ."', hoten = '".$hoten
        ."', tuoi = ".$tuoi
        .", malop = '".$lop
        ."' where mssv= '".$mssvold."'";
        echo $query;
        return $this->mysql->MyQuery($query);
    }
 }
?>
