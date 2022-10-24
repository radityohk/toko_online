<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>HELVETICA - HOME</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container">
        <table class="table">
            <thead>
            <th scope="col">List</th>
            </thead>
            <tbody>
                <tr>
                <td>
                   <a href="data_pelanggan.php">Data Pelanggan</a>
                </td>
                </tr>
                <tr>
                <td>
                    <a href="daftar_produk.php">Daftar Produk</a>
                </td>
                </tr>
                <tr>
                    <td>
                    <a href="tambah_produk.php">Tambah Produk</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>