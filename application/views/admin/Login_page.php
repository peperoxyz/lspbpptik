<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: white;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">Login</h1>
                <p class="lead">Login untuk masuk ke dashboard</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mx-auto bg-light p-4" style="border-radius: 7px">
                <form action="<?= site_url('admin/Login') ?>" method="POST">
                <label for="username">Username / Email</label>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" name = "email" class="form-control" placeholder="username / email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required />
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="rememberme" id="rememberme" />
                                <label class="custom-control-label" for="rememberme"> Ingat Saya</label>
                            </div>
                            <!-- <a href="<?= site_url('reset_password') ?>">Lupa Password?</a> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-100" value="Login" />
                        <p class="mt-4">Belum punya akun? <a href="<?=base_url()?>admin/register" >Daftar di sini.</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>