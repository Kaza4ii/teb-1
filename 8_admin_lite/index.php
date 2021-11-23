<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <?php
  unset($_SESSION['form_date']);
  if(!empty($_SESSION['error'])){
  if(isset($_SESSION['error']['succes'])){
    echo <<< KOMUNIKAT
     <div class="card card-success">
      <div class="card-header">
          <h3 class="card-title">Komunikat</h3>
      </div>
      <div class="card-body">
                {$_SESSION['error']['succes']}
      </div>
                <!-- /.card-body -->
     </div>
    KOMUNIKAT;
    unset($_SESSION['error']['succes']);
  } else {
    echo <<< KOMUNIKAT
     <div class="card card-danger">
      <div class="card-header">
          <h3 class="card-title">Komunikat</h3>
      </div>
      <div class="card-body">
                $_SESSION[error]
      </div>
                <!-- /.card-body -->
     </div>
    KOMUNIKAT;
    unset($_SESSION['error']);
  }
}
   ?>
  <div class="card card-outline card-primary">

<div class="login-box">
  <!-- /.login-logo -->

    <div class="card-header text-center">
      <a href="./" class="h1"><b>Logowanie</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Wprowadż dane do logowania</p>

      <form action="./login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Zapamiętaj mnie
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Zalogój</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="./pages/forgot-password.php">Zapomniałem hasło</a>
      </p>
      <p class="mb-0">
        <a href="./pages/register.php" class="text-center">Rejestracja nowego użytkownika</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
</body>
</html>
