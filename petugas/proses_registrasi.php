
<?php
if($_POST){
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO petugas (nama_petugas, username, password, level) VALUES ('{$nama_petugas}','{$username}','".md5($password)."','{$level}')");       
    
    if ($input) {
        echo "<script>alert('BERHASIL');location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('gagal');location.href='registrasi.php';</script>";
    }
}
?>