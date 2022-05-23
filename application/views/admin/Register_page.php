<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">Sign Up</h1>
                <p class="lead">Sign Up untuk masuk ke halaman utama</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mx-auto p-4 bg-light" style="border-radius: 7px">
                <form action="<?= site_url('admin/register') ?>" method="POST">
                    
                    <div class="form-group">
                        <label for="full_name">Nama Lengkap</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Masukkan nama lengkap" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email" required />
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan username" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan password" required />
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary w-100" value="Sign Up" />
                        <p class="mt-4">Sudah punya akun? <a href="<?=base_url()?>admin/login" >Login di sini.</a></p>
                    </div >
                </form>
            </div>
        </div>
    </div >

</body>

</html>