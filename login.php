<?php session_start();
//mengaktifkan sesi

require 'config/koneksi.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>LLDIKTI4 Kelembagaan</title>
    <link rel="icon" href="assets/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png">
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/bg3.svg'); height: 400px; align-self: center; background-color: #E0ECF1;"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="title">
              <img style="width: 350px; height: 70px;" src="assets/LLDIKTI4-Logo2bc.png" alt="">
            <p class="mb-4">Sistem Informasi - PTB</p>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="paswd">
              </div>
              <input type="submit" value="Log In" class="login">
            </form>
          </div>
        </div>
      </div>
    </div>    
  </div>
  </body>
</html>