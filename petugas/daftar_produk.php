<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body >
    <?php
    include "navbar.php";
    ?>
    <div class="container">
        <div class="header">
            <h1>Daftar Produk</h1>
            <form method="POST" action="daftar_produk.php" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID Produk</th>
                    <th scope="col">nama produk</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">harga</th>
                    <th scope="col">foto</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
            <?php
                include "koneksi.php";
                if (isset($_POST['cari'])) {
                    $cari = $_POST['cari'];
                    $qry_produk = mysqli_query($koneksi, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%'");
                }
                else{
                    $qry_produk = mysqli_query($koneksi, "select * from produk");
                }
                while($dt_produk = mysqli_fetch_array($qry_produk)){
            ?>
            <tr>
                <td><?=$dt_produk['id_produk']?></td>
                <td><?=$dt_produk['nama_produk']?></td>
                <td><?=$dt_produk['deskripsi']?></td>
                <td><?=$dt_produk['harga']?></td>
                <td><img src="foto/<?=$dt_produk['foto_produk']?>" width=100></td>
                <td>
                    <a href="ubah_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-success">Edit</a>
                    <a href="hapus_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
                </div>
            </div>
            <?php
            }
            ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="tambah_produk.php" type="button" class="btn btn-primary">Tambah Produk</a>
    
    
</body>
</html>