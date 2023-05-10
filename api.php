<?php
    include "koneksi.php";    
    if(isset($_POST['us'])){
        $sql = "UPDATE `data` SET `ultrasonic` = '".$_POST['us']."' WHERE `data`.`id` = 1;";
        $query = mysqli_query($koneksi, $sql);
    }
    if(isset($_POST['c'])){
        $sql = "UPDATE `data` SET `cairan_keluar` = '".$_POST['c']."' WHERE `data`.`id` = 1;";
        $query = mysqli_query($koneksi, $sql);
    }
    if(isset($_POST['i'])){
        $sql = "UPDATE `data` SET `identifikasi` = '".$_POST['i']."' WHERE `data`.`id` = 1;";
        $query = mysqli_query($koneksi, $sql);
    }
    if(isset($_POST['lt'])){
        $sql = "UPDATE `data` SET `latitude` = '".$_POST['lt']."' WHERE `data`.`id` = 1;";
        $query = mysqli_query($koneksi, $sql);
    }
    if(isset($_POST['lg'])){
        $sql = "UPDATE `data` SET `longitude` = '".$_POST['lg']."' WHERE `data`.`id` = 1;";
        $query = mysqli_query($koneksi, $sql);
    }

    $sql = "SELECT * FROM `data` WHERE id=1";
    $query = mysqli_query($koneksi, $sql);
    $db = mysqli_fetch_object($query);
    echo json_encode($db);


?>
