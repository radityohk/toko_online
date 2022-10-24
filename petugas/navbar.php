<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="navbar.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success " style="box-shadow : 4px 4px 5px -4px">
    <div class="container-fluid">
        <a class="navbar-brand">ADMIN <img src="http://localhost/tokoonline/foto/ecom.svg" alt="" height="60px" width="60px"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- <li class="nav-item">
                <a clsss="nav-link" aria-current="page" href="profil.php">PROFIL</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="data_pelanggan.php">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="daftar_produk.php">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
            
        </ul>
    </div>
</nav>
    
</body>
</html>