<?php  
require_once 'entity.php';
class hangSua extends Entity{
    public function GetAll()
    {
        return $this->mysql->GetAll("hangsua");
    }

    public function GetByID($mahs)
    {
        $query = "select * from hangsua where mahs = '$mahs'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
}
?>