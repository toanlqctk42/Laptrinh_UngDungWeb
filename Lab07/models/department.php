<?php
class Department{
    private $Conn ;
    public $ID;
    public $Name;
    public $NumberOfStaff;

    public function __construct($Connection)
    {
        $this->Conn = $Connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Departments";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll();
        $this->Conn = null;
        return $result;
    }

    public function getbyId($id)
    {
        $sql = "SELECT * FROM Departments WHERE id =:id";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute(array('id' => $id));
        $result = $cmd->fetchObject();
        $this->Conn = null;
        return $result;
    }

    public function InsertDPM($Name)
    {
        $sql = "INSERT INTO Departments values(:Name,'0')";
        $cmd = $this->Conn->prepare($sql);
        if($cmd->execute(array($Name)))
            return true;
        return false;
    }
}
?>