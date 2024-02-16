<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <link rel="shortcut icon" href="<?= base_url("assets/images/logo_pln.png") ?>">
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                </div>

                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>
                            Hello Again!
                            <h6>Selamat Datang</h6>
                        </header>
                        <form class="user" action="<?= base_url('login/gate'); ?>" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="username" required="" autocomplete="off" name="email">
                                <label for="username">Nama Pengguna</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="pass" required="" name="password">
                                <label for="pass">Kata Sandi</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Login" name="submit">
                            </div>
                            <div class="signin">
                                <span>Tidak Memiliki Akses Masuk?<a href="<?= base_url("/") ?>"> Kembali</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>