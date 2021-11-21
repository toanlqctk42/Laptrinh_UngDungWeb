<?php
require_once 'libs/connection.php';
require_once 'models/employee.php';

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

    public function run($action)
    {
        switch ($action) {
            case "index":
                $this->index();
                break;
            case "detail":
                $this->detail();
                break;
        }
    }
}
