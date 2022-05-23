<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">

    <title>BPPTIK-Home</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="row">
      <div class="container sticky-top">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#1C2534">
          <div class="container-fluid ">
            <a class="navbar-brand text-white" href="<?= base_url();?>home">LSP BPPTIK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse float-end" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="<?= base_url();?>home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url();?>profil">Profil</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white" href="<?= base_url();?>artikel">Artikel</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Social Media </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="https://www.instagram.com/bpptik/?hl=en"><bi class="bi bi-instagram"> Instagram</a></li>
                    <li><a class="dropdown-item" href="https://id-id.facebook.com/bpptik/"><bi class="bi bi-facebook"> Facebook</a></li>
                    <li><a class="dropdown-item" href="https://www.youtube.com/c/BPPTIKKementerianKominfo"><bi class="bi bi-youtube"> Youtube</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url();?>lainnya">Lainnya</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
