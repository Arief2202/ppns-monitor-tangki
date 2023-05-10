<?php
    include "koneksi.php";       
    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user'] != "admin") header("Location: /login.php");
    if(isset($_POST['logout'])){
        $_SESSION['user'] = NULL;
        header("Location: /login.php");
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monitoring - Dashboard</title>
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Monitoring</a>
                
                <ul class="ms-auto navbar-nav">
                    <li class="nav-item">
                        <form method="POST">
                            <button class="nav-link" style="border: none; background-color: transparent;" name="logout">Logout</button>
                        </form>
                    </li>
                </ul>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="ms-auto navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>

        <div class="container">
            <div class="card mt-3 p-3">
                <p>Level   : <a id="ultrasonic"><?=$db->ultrasonic?> %</a></p>
                <div class="progress mb-3">
                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p>Total Cairan : <a id="cairan_keluar"><?=$db->cairan_keluar?> mL</a></p>
                <p>Identifikasi : <a id="identifikasi"><?=$db->identifikasi?></a></p>
                <iframe style = "mb-5" id="map" width="100%" height="400" src="https://maps.google.com/maps?q=<?=$db->latitude?>,<?=$db->longitude?>&output=embed"></iframe>
            </div>
        </div>
        
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>