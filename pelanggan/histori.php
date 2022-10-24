<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <?php
    include "navbar.php";
    ?>
</head>
<body>
<br></br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>HISTORI PEMBELIAN</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
            <thead>
                <th scope="col" >NO/ID TRANSAKSI</th>
                <th scope="col" >TANGGAL TRANSAKSI</th>
                <th scope="col" >NAMA BARANG</th>
                <th scope="col" >JUMLAH BARANG</th>
                <th scope="col" >HARGA BARANG</th>
                <th scope="col" >TOTAL SEMUA</th>
                <th scope="col" >STATUS</th>
            </thead>
            <tbody>
            <?php
                include "koneksi.php"; 
                $qry_beli = mysqli_query($conn, "SELECT * FROM transaksi where id_pelanggan = '".$_SESSION['id_pelanggan']."' ORDER BY id_transaksi DESC");
          
                $no = 0;
                while($dt_transaksi=mysqli_fetch_array($qry_beli)){      
                    $no++;
                ?>
                <tr>
                    <td><?=$dt_transaksi['id_transaksi']?></td>
                    <td><?=$dt_transaksi['tgl_transaksi']?></td>
                    <td>
                        <ol>
                            <?php
                            include "Koneksi.php";
                            $qry_detail = mysqli_query($conn, "SELECT * FROM detail_transaksi d
                            JOIN produk p ON p.id_produk = d.id_produk WHERE id_transaksi = '".$dt_transaksi['id_transaksi']."'");
                            while($dt_detail = mysqli_fetch_array($qry_detail)){
                                echo "<li>".$dt_detail['nama_produk']."</li>";
                            }
                            ?>
                        </ol>
                    </td>
                    <td>
                            <ul style="list-style: none;">
                            <?php
                            include "koneksi.php";
                            $qry_detail = mysqli_query($conn, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$dt_transaksi['id_transaksi']."'");
                            while($dt_detail = mysqli_fetch_array($qry_detail)){
                                echo "<li>".$dt_detail['qty']."<li>";
                            }
                            ?>
                            </ul>
                        </td>
                    <td>
                        <?php
                        include "koneksi.php";
                        $query_detail = mysqli_query($conn, "SELECT * FROM detail_transaksi d
                                    JOIN produk p ON p.id_produk = d.id_produk WHERE
                                    id_transaksi = '".$dt_transaksi['id_transaksi']."'");
                        while($dt_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".number_format($dt_detail['subtotal'])."</li>";
                        }
                        ?>
                            </ul>
                        </td>
                        <td>
                        <?php
                            include "koneksi.php";
                            $qry_bayar = mysqli_query($conn, "SELECT SUM(subtotal) AS total FROM detail_transaksi
                            WHERE id_transaksi = '".$dt_transaksi['id_transaksi']."'");
                            $dt_bayar = mysqli_fetch_array($qry_bayar);
                            echo "<label class='alert alert-secondary'>Rp. ".number_format($dt_bayar['total'])."</label>";
                            ?>
                        </td>
                        <?php
                            include "koneksi.php";
                            echo "<td><label class='alert alert-success'>Telah Berhasil<br></label></td>";
                            ?>
                            
                        </td>             
                </tr>
               <?php  } ?>
            </tbody>
        </table>
        <a href = "home.php" class="btn btn-success"><-- RETURN HOME</a>
        </div>
    </div>
</div>
</body>
</html>
