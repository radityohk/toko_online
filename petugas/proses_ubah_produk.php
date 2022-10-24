<?php
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $temp = $_FILES['foto_produk']['tmp_name'];
    $type = $_FILES['foto_produk']['type'];
    $size = $_FILES['foto_produk']['size'];
    $name = rand(0,9999).$_FILES['foto_produk']['name'];
    $folder = "foto/";

    include "koneksi.php";

    $sql = "select * from produk where id_produk='$id_produk'";

    $query = mysqli_query($koneksi, $sql);

    $produk = mysqli_fetch_array($query);

    $path = $folder.$produk["foto_produk"];

    if (file_exists($path)){
        unlink($path);
    }
    move_uploaded_file($temp, $folder . $name);

    $sql = "update produk set nama_produk='$nama_produk',
    deskripsi='$deskripsi', harga='$harga', foto_produk='$name' 
    where id_produk='$id_produk'";

    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Berhasil');location.href='daftar_produk.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }
?>