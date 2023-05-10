<?php
    include "koneksi.php";   
    session_start();
    if(isset($_SESSION['user']) && $_SESSION['user'] == "admin") header("Location: /");

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "admin" && $password == "admin"){
            $_SESSION['user'] = $username;
            header("Location: /");
        }
        else{
            echo "<script> alert('Wrong Username or Password'); </script>";
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monitoring - Login</title>
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Monitoring</a>
            </div>
        </nav>

        <div class="container" style="max-width: 500px;">
        <div class="card mt-5 p-3">

            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <button type="submit" class="btn btn-success float-end mt-3">LOGIN</button>
                </form>
            </div>
        </div>
        
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>