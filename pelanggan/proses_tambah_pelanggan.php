<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } 
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama, alamat, telp, password) value ('".$nama."','".$alamat."', '".$telp."', '".md5($password)."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
