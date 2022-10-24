<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>

    <style>
        .tb-ptgs {
            margin-left: 10px;
        }
    </style>

    <script src="modal.js"></script>

</head>

<body style="padding: 20px;">
    <h3>Tambah Transaksi</h3>
    <form action="proses_transaksi.php" method="post">
        Nama pelanggan : 
        <select name="id_pelanggan" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_pelanggan=mysqli_query($conn,"select * from pelanggan");
            while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){
                echo '<option value="'.$data_pelanggan['id_pelanggan'].'">'.$data_pelanggan['nama'].'</option>';    
            }
            ?>
        </select>
        Nama petugas : 
        <select name="id_petugas" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_petugas=mysqli_query($conn,"select * from petugas");
            while($data_petugas=mysqli_fetch_array($qry_petugas)){
                echo '<option value="'.$data_petugas['id_petugas'].'">'.$data_petugas['nama_petugas'].'</option>';    
            }
            ?>
        </select>
        Nama produk : 
        <select name="id_produk" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            while($data_produk=mysqli_fetch_array($qry_produk)){
                echo '<option value="'.$data_produk['id_produk'].'">'.$data_produk['nama_produk'].'</option>';    
            }
            ?>
        </select>
        Tanggal Transaksi : 
        <input type="date" name="tgl_transaksi" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>

    <div class="pindah" style="display: flex; margin-top: 5px;">
        <form action="tambah_produk.php">
            <input type="submit" value="Produk">
        </form>
        <form class="tb-ptgs" action="tambah_petugas.php">
            <input type="submit" value="Petugas">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>