<?php
    include "navbar.php";
?>
<br></br>
<h2>Daftar Produk di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>qty</th>
            <th>Harga Barang</th>
            <th>ID Petugas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (@$_SESSION['cart'] as $key => $value) : ?>
            <tr>
                <td><?=($key+1)?></td>
                <td><?=$value['nama_produk']?></td>
                <td><?=$value['qty']?></td>
                <td><?=$value['harga']?></td>
                <td><?=$value['id_petugas']?></td>
                <td><a href="hapus_cart.php?id=<?=$key?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
            <?php endforeach;?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Beli</a>