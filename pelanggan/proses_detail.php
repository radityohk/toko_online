<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $id_produk=$_POST['id_produk'];
    
    if(empty($id_transaksi)){
        echo "<script>alert('tanggal transaksi tidak boleh kosong');location.href='transaksi.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into detail_transaksi (id_transaksi, id_pelanggan, id_petugas, tgl_transaksi) value ('".$id_transaksi."','".$id_pelanggan."','".$id_petugas."','".$tgl_transaksi."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal transaksi');location.href='transaksi.php';</script>";
        }
    }
}
?>