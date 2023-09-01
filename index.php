<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>E-ARSIP - Login</title>

<!--bootstrap core CSS--> 
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/floating-labels.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-15 m-auto">
  <form class="form-signin" method="post" action="cek_login.php">
    <div class="text-center mb-4">
    <img class="mb-4" src="assets/logo.jpg" alt="" width="100">
    <h1 class="h3 mb-3 fw-normal">Login E-Arsip</h1>
    <p>Silahkan masukan username dan password anda, sebelum masuk ke dalam E-Arsip</p>

    <div class="form-floating">
      <input type="text" class="form-control" id="username" name="username" placeholder="Email">
      <label for="username">Username</label>
    </div>
    <div class="form-floating mt-2">
      <input type="password" class="form-control" id="password" name= "password" placeholder="password">
      <label for="password">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-4 mb-3 text-body-secondary">&copy; 2023–<?=date('Y')?> Create by. Rahmat Aryansyah | Laporan Akhir Magang dan Kerja Praktek</p>
    </div>
  </form>
</main>
</body>
</html>
