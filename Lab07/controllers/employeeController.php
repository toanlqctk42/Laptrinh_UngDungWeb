<?php
require_once 'libs/connection.php';
require_once 'models/employee.php';
require_once 'models/department.php';

class EmployeeController
{
    private $Connection;
    private $requestMethod;

    public function __construct()
    {
        $conn = new Connection();
        $this->Connection = $conn->Connection();
    }

    public function view($path, $dt)
    {
        $data = $dt;
        require_once "views/employees/" . $path . ".php";
    }
    public function index()
    {
        $emp = new Employee($this->Connection);
        $empList = $emp->getAll();
        $this->view("index", array("empList" => $empList, "title" => "MVC List"));
    }

    public function detail()
    {
        $emp = new Employee($this->Connection);
        $id = $_GET["id"];
        $empObj = $emp->getByID($id);
        $this->view("detail", array("emp" => $empObj, "title" => "MVC Obj"));
    }

    public function them(){
        $dpm = new Department($this->Connection);
        $dpmList =$dpm->getAll();
        $this->view("add", array("dpmList"=>$dpmList, "title" => "MVC Obj"));
    }

    public function sua(){
        $emp = new Employee($this->Connection);
        $dpm = new Department($this->Connection);
        $emp_id = $_GET["emp_id"];
        $dpm_id = $_GET["dpm_id"];
        $empObj = $emp->getByID($emp_id);
        $dpmObj = $dpm->getByID($dpm_id);
        $this->view("edit", array("emp" => $empObj,"dpm" => $dpmObj, "title" => "MVC Obj"));
    }

    public function insert(){
        $emp = new Employee($this->Connection);
        $dpm = new Department($this->Connection);
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        $email = $_GET["email"];
        $phone = $_GET["phone"];
        $dpm_id = $_GET["dpm_id"];
        $emp->InsertEMP($name,$surname,$email,$phone,$dpm_id);
        $dpmObj = $dpm->getbyId($dpm_id);
        $numberofstaff = $dpmObj["NumberOfStaff"]->NumberOfStaff;
        $dpm->UpdateDPM($dpmObj["ID"],$dpmObj["Name"],$numberofstaff+1);
        $this->index();
    }

    public function update(){

    }

    public function delete(){
        $emp = new Employee($this->Connection);
        $dpm = new Department($this->Connection);
        $emp_id = $_GET["emp_id"];
        $emp->DeleteEMP($emp_id);
        $dmp_id = $_GET["dmp_id"];
        $dmpObj = $dpm->getbyId($dmp_id);
        $dpm->UpdateDPM($dmpObj["ID"],$dmpObj["Name"],$dmpObj["NumberOfStaff"]-1);
        $this->index();
    }

    public function run($action)
    {
        switch ($action) {
            case "index":
                $this->index();
                break;
            case "detail":
                $this->detail();
                break;
            case "insert":
                $this->insert();
                break;
            case "update":
                $this->update();
                break;
            case "delete":
                $this->delete();
                break;
            case "add":
                $this->them();
                break;
            case "edit":
                $this->sua();
                break;
        }
    }
}