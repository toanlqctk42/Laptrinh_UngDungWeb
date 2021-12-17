<?php 
require_once 'entity.php';
class loaisua extends Entity {
    public function GetALL()
    {
        return $this-> mysql->GetAll("loaisua");
    }

    public function GetByID($maloaisua)
    {
        $query = "select * from loaisua where maloaisua = '$maloaisua'";
        $result = $this-> mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
}
?>