<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        $qry_produk = mysqli_query($koneksi, "select * from produk where id_produk='".$_GET['id_produk']."'");
        $dt_produk = mysqli_fetch_array($qry_produk);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">ubah produk</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_produk.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">nama_produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="<?=$dt_produk['nama_produk']?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</lable>
                        <textarea class="form-control" name="deskripsi" row="3" placeholder="masukkan Deskripsi produk" required><?=$dt_produk['deskripsi']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">harga</label>
                        <input type="text" class="form-control" name="harga" value="<?=$dt_produk['harga']?>">
                    </div>
                    <div class="mb-3">
                        <label for="foto_produk" class="form-label">Foto</label>
                        <img src="foto/<?=$dt_produk['foto_produk']?>" width=100>
                        <input type="file" class="form-control" name="foto_produk" required>
                    </div>
                    <button type="submit" class="btn btn-success">submit</button>
                </form>
            </div>
        </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>