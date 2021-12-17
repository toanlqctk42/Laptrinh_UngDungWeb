<?php
    require_once 'student.php';
    $mssv = $_GET['mssv'];
    $sinhvien = new SinhVien('qlsinhvien');
    $sinhvien ->Delete($mssv);
    header('location:index.php');
?>
