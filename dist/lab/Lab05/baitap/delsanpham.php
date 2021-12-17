<?php 
    include 'sanpham.php';
    $masua = $_GET['masua'];
    $sp = new sanpham('milkstory');
    $sp ->Delete($masua);
    header('location:index.php');
?>