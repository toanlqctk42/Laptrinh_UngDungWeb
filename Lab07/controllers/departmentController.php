<?php 
require_once 'libs/connection.php';
require_once 'models/department.php';

class departmentController{
    private $Connection;

    public function __construct()
    {
        $conn = new Connection();
        $this->Connection = $conn->Connection();
    }
    
    public function view($path,$dt)
    {
        $data = $dt;
        require_once "views/departments/".$path.".php";
    }
    public function index(){
        $dpm = new Department($this->Connection);
        $dpmList = $dpm->getAll();
        $this->view("index",array("dpmList"=>$dpmList,"title"=>"MVC List"));
    }

    public function detail(){
        $dpm = new Department($this->Connection);
        $id = $_GET["id"];
        $dpmObj= $dpm->getByID($id);
        $this->view("detail",array("dpm"=>$dpmObj,"title" =>"MVC Obj"));
    }

    public function insert(){
        $dpm = new Department($this->Connection);
        $Name = $_POST["name"];
        $dpmObj = $dpm->InsertDPM($Name);
        $this->index();

    }

    public function run($action){
        switch($action){ 
            case "index":
                $this->index();
                break;
            case "detail":
                $this->detail();
                break;
            case "insert":
                $this->insert();
                break;
        }
    }

}
?>