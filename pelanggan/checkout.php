<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {
        $tgl_transaksi = date('Y-m-d');
        $id_petugas=1;
        $query_transaksi = mysqli_query($conn, "INSERT INTO transaksi (id_pelanggan, id_petugas, tgl_transaksi)
        VALUES ('".$_SESSION['id_pelanggan']."','".$id_petugas."','".$tgl_transaksi."')");

        if ($query_transaksi) {
            $id = mysqli_insert_id($conn);
            foreach ($cart as $key => $value) {
                $qty = $value['qty'];
                $harga = $value['harga'];
                $subtotal = $qty*$harga;
                mysqli_query($conn, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal)
                VALUES ('".$id."', '".$value['id_produk']."', '".$qty."', '".$subtotal."')");
            }
            unset($_SESSION['cart']);
            echo "<script>alert('TRANSAKSI BERHASIL');location.href='histori.php'</script>";
        }
        else{
            echo "<script>alert('TRANSAKSI GAGAL');location.href='checkout.php'</script>";
        }
    }
?>