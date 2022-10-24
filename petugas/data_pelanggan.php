<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container">
        <div class="card-header">
            <h1>data pelanggan</h1>
        </div>
        <table class="table">
        <thead>
            <th scope="col">ID PELANGGAN</th>
            <th scope="col">NAMA PELANGGAN</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">TELP</th>
            <th scope="col">PASSWORD</th>
        </thead>
        <tbody>
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_kelas = mysqli_query($koneksi,
            "select * from kelas where id_pelanggan = ' $cari 'or nama_pelanggan like '%$cari%' ");
        }else {
            //jika tidak ada keyword pencarian 
            $query_pelanggan = mysqli_query($koneksi,"select * from pelanggan");
        }
        while ($dt_pelanggan=mysqli_fetch_array($query_pelanggan)) { ?>
                  <tr>
                      <td><?php echo $dt_pelanggan['id_pelanggan']; ?></td>
                      <td><?php echo $dt_pelanggan['nama']; ?></td>
                      <td><?php echo $dt_pelanggan['alamat']; ?></td>
                      <td><?php echo $dt_pelanggan['telp']; ?></td>
                      <td><?php echo $dt_pelanggan['password']; ?></td>
                  </tr>
                <?php
                }
                ?>
        </tbody>
    </div>        
</body>
</html>