<?php
session_start();
//ini mengatasi jika user masuk menggunakan link tanpa login
if(empty($_SESSION['id_user']) or empty($_SESSION['username'])){
  echo "<script>alert('Maaf, untuk mengakses halaman ini, silahkan Login terlebih dahulu..!!'); document.location='index.php;'</script>";
}

?>
<!doctype html>
<html lang="en">
<head>
  <!--Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <title>E-Arsip</title>
</head>
<body>
    <!--Awal Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="?">E-Arsip</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=departemen">Data Departemen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=pengirim_surat">Data Pengirim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?halaman=arsip_surat">Data Arsip Surat</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    </nav>
    <!--Akhir Navbar-->
    <!--Awal Container-->
    <div class= "container">