<?php
    include "koneksi.php";

    $id_produk = $_GET['id_produk'];
    $folder = "foto/";

    // mendapatkan data produk yang mau dihapus
    $sql = "select * from produk where id_produk='$id_produk'";

    #mengeksekusi perintah SQL
    $query = mysqli_query($koneksi, $sql);

    #konversi ke array
    $produk = mysqli_fetch_array($query);
    
    # proses hapus file yg lama
    $path = $folder.$produk['foto_produk'];

    if (file_exists($path)) {

        unlink($path);
    }
    $sql = "DELETE FROM produk where id_produk = '$id_produk'";

    $result = mysqli_query($koneksi,$sql);

    if($result){
        echo "<script>alert('Berhasil');location.href='daftar_produk.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }

?>