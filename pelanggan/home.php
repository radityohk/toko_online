<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokopaedi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php
    include "navbar.php";
    ?>
</head>
<body>
<div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
<?php
    include "koneksi.php";
    if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
        $qry_produk = mysqli_query($conn, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%'");
    } else {
        $qry_produk=mysqli_query($conn,"select * from produk");
    }
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
    <div class="col-md-3">
        <div class="card shadow-sm">
           <img src="../petugas/foto/<?=$dt_produk['foto_produk']?>"class="bd-placeholder-img-card-img-top" 
           xmlns="https://www.w3.org/2000/svg" role="img"
           aria-label="placeholder: thumbnail" preserveAspectRation="xMidYMid slice"
            focusable="false"><title>Placeholder</title>
            <rect width=100% height=100% fill="#55595c"/></img>
            <div class="card-body">
                <p class="card-text"><?=$dt_produk['nama_produk']?></h5>
                <p class="card-text"><?=$dt_produk['deskripsi']?></p>
                <p class="card-text">Rp <?=number_format($dt_produk['harga'])?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class=btn-group>
                  <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-success">B E L I </a>
                </div>
                </div>
            </div>
        </div>
        <br></br>
    </div>
    <?php
    }
    ?>
</body>
</html>