<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="Stylesheet" href="stylesheet.css"/>
</head>
<body >
    <div class="container">
        <div class="card-header">
            <h2>TAMBAH ADMIN</h2>
        </div>
        <div class="card-body">
            <form action="proses_registrasi.php" method="POST">
                nama :
                <input type="text" name="nama_petugas" value="" class="form-control">
                username :
                <input type="text" name="username" value="" class="form-control">
                password :
                <input type ="password" name="password" value="" class="form-control">
                 level :
                <input type="text" name="level" value="" class="form-control">
                <br></br>
                <Input type="submit" name="simpan" value = "DAFTAR" class="btn btn-primary" required>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>
</html>