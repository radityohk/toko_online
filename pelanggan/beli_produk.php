<?php
    include "navbar.php";
    include "koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where
    id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<h2>DETAIL PRODUK</h2>
<div class = "row">
    <div class="col-md-4">
        <img src="../petugas/foto/<?=$dt_produk['foto_produk']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masuk_cart.php?" method="POST">
            <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?> ">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>NAMA PRODUK : </td>
                        <td><?=$dt_produk['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>DESKRIPSI :</td>
                        <td><?=$dt_produk['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Harga Barang :</td>
                        <td><?=number_format($dt_produk['harga'])?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli :</td>
                        <td><input type="number" name="jumlah_produk" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" 
                    type="submit" value="beli"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>

    <?php
        // include "footer.php";
    ?>
</div>