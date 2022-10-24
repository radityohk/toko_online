<?php
if($_POST){
    $transaksi=$_POST['id_transaksi'];
    $produk=$_POST['id_produk'];
    $qty= $_POST["qty"];
    $total= $_POST["total"];
    if(empty($transaksi)){
        echo "<script>alert('id transaksi tidak boleh kosong');location.href='detail_transaksi.php';</script>";
    }  elseif(empty($produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='detail_transaksi.php';</script>";
    }elseif(empty($qty)){
        echo "<script>alert('qty tidak boleh kosong');location.href='detail_transaksi.php';</script>";
    }elseif(empty($total)){
        echo "<script>alert('sub total tidak boleh kosong');location.href='detail_transaksi.php';</script>";
    } 
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into detail_transaksi (id_transaksi, id_produk, qty, subtotal ) value ('".$transaksi."','".$produk."','".$qty."','".$total."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='detail_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='detail_transaksi.php';</script>";
        }
    }
}
?>