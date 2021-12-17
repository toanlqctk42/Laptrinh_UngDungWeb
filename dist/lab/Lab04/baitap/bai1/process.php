<?php 
class PhanSo{
    public $tuso;
    public $mauso;

    public function __construct()
    {
        $this->tuso = 0;
        $this->mauso = 1;
    }

    public function __construct1($ts,$ms)
    {
        $this->tuso = $ts;
        $this->mauso = $ms;
    }

    public function nhap($ts,$ms){
        $this->tuso = $ts;
        $this->mauso = $ms;
    }

    public static function xuat($phanso){
        if($phanso->tuso % $phanso->mauso == 0){
            echo " ".($phanso->tuso/$phanso->mauso)." ";
        }
        else{
            echo " ".$phanso->tuso ." / ". $phanso->mauso." "; 
        }
    }
}
Class TinhToanPhanSo{
    public static function tinh($phanso1,$phanso2,$pheptinh){
        $phansokq = new PhanSo();
        switch($pheptinh)
        {
            case "+":
                if($phanso1->mauso == $phanso2->mauso){
                    $phansokq->tuso = $phanso1->tuso + $phanso2->tuso;
                    $phansokq->mauso = $phanso1->mauso ;
                }
                else{
                    $phansokq->tuso =($phanso1->tuso *  $phanso2->mauso) + ($phanso2->tuso *  $phanso1->mauso);
                    $phansokq->mauso = ( $phanso1->mauso *  $phanso2->mauso);
                }
                PhanSo::xuat($phansokq);
                break;
            case "-":
                if($phanso1->mauso == $phanso2->mauso){
                    $phansokq->tuso = $phanso1->tuso - $phanso2->tuso;
                    $phansokq->mauso = $phanso1->mauso ;
                }
                else{
                    $phansokq->tuso =($phanso1->tuso *  $phanso2->mauso) - ($phanso2->tuso *  $phanso1->mauso);
                    $phansokq->mauso = ( $phanso1->mauso *  $phanso2->mauso);
                }
                PhanSo::xuat($phansokq);
                break;
            case "*":
                $phansokq->tuso = ($phanso1->tuso * $phanso2->tuso);
                $phansokq->mauso =($phanso1->mauso *  $phanso2->mauso);
                PhanSo::xuat($phansokq);
                break;
            case "/":
                $phansokq->tuso = ($phanso1->tuso * $phanso2->mauso);
                $phansokq->mauso =($phanso1->mauso *  $phanso2->tuso);
                PhanSo::xuat($phansokq);
                break;
        }
    }
}
?>