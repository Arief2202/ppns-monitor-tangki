<?php
$server = "localhost";
$user = "monitorppns";
$password = "password";
$nama_database = "monitorppns";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);

$sql = "SELECT * FROM `data` WHERE id=1";
$query = mysqli_query($koneksi, $sql);
$db = mysqli_fetch_object($query);