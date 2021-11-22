<?php
    $hienthi = $_REQUEST['banghienthi'];
    if($hienthi == "dpm") {
        require_once 'controllers/departmentController.php';
        $controller = new departmentController();
        if(!isset($_GET["action"])){
            $controller ->run("index");
        }else
        {
            $action = $_GET["action"];
            $controller ->run($action);
        }
    }else if($hienthi == "emp"){
        require_once 'controllers/employeeController.php';
        $controller = new EmployeeController();
        if(!isset($_GET["action"])){
            $controller ->run("index");
        }else
        {
            $action = $_GET["action"];
            $controller ->run($action);
        }
    }
?>