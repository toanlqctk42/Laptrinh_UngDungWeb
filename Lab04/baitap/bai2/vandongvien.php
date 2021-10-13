<?php 
class vandongvien{
    public $hoten;
    public $tuoi;
    public $monthidau;
    public $cannang;
    public $chieucao;

    public function __construct(){
        $this->hoten =" ";
        $this->tuoi = 0;
        $this->monthidau = " ";
        $this->cannang = 0;
        $this->chieucao = 0;
    }

    public function __construct1($hoTen,$Tuoi,$monThidau,$canNang,$chieuCao){
        $this->hoten = $hoTen;
        $this->tuoi = $Tuoi;
        $this->monthidau = $monThidau;
        $this->cannang = $canNang;
        $this->chieucao = $chieuCao;
    }

    public function nhap($hoTen,$Tuoi,$monThidau,$canNang,$chieuCao){
        $this->hoten = $hoTen;
        $this->tuoi = $Tuoi;
        $this->monthidau = $monThidau;
        $this->cannang = $canNang;
        $this->chieucao = $chieuCao;
    }
}

?>