<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="stylesheet.css" rel="stylesheet">
</head>
<body class="text-center" >
    <div class="container">
        <main class="form-signin">
            <form action="proses_login.php" method="POST">
                <img class="mb-4" src="http://localhost/tokoonline/foto/ecom.svg" alt="" width=120 height=120>
                <h1 class="h3 mb-3 fw-normal">ADMIN</h1>
                <h2 class="h3 mb-3 fw-normal">HELVETICA</h2>
                <div class="form-floating">
                    <input type="username" class="form-control" id="floatingInput"
                    name="username" placeholder="insert username">
                    username :
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword"
                    name="password" placeholder="insert password">
                    password :
                </div>
                <div>
                    <label>
                    <a href="registrasi.php">tambah admin</a>
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
            </form>
        </main>
    </div>
</body>
</html>