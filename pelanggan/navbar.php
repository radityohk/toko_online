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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="navbar.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " style="box-shadow : 4px 4px 5px -4px">
    <div class="container-fluid">
        <a class="navbar-brand">BangkuBelakang <img src="http://localhost/tokoonline/foto/ecom.svg" alt="" height="60px" width="60px"></a>
        <form method="POST" action="home.php" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Cari barangmu disini" aria-label="Search">
                <button class="btn btn-warning" type="submit">Cari</button>
            </form>
        <?php
                include "koneksi.php";
                if (isset($_POST['cari'])) {
                    $cari = $_POST['cari'];
                    $qry_produk = mysqli_query($conn, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%'");
                }
                else{
                    $qry_produk = mysqli_query($conn, "select * from produk");
                }
                while($dt_produk = mysqli_fetch_array($qry_produk)){
            ?>
            <?php
            }
            ?>
    </div>
    
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    MENU</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="home.php">HOME</a></li>
        <li><a class="dropdown-item" href="cart.php">KERANJANG</a></li>
        <li><a class="dropdown-item" href="histori.php">HISTORI</a></li>
        <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
        </ul>
    </div>
</nav>
    
</body>
</html>