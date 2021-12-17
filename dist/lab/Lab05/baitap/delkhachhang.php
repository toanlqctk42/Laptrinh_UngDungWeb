<?php 
    require_once 'khachhang.php';
    $makh = $_GET['makh'];
    $kh = new khachhang('milkstory');
    $kh ->Delete($makh);
    header('location:index.php');
?>