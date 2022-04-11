<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Optica del Sol</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url("resources/plugins/fontawesome-free/css/all.min.css")?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo site_url("resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url("resources/css/adminlte.min.css")?>">
  <style>
/* Cool infinite background scrolling animation.
 * Twitter: @kootoopas
 */
/* Exo thin font from Google. */
/*@import url(https://fonts.googleapis.com/css?family=Exo:100);*/
/* Background data (Original source: https://subtlepatterns.com/grid-me/) */
/* Animations */
@-webkit-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-moz-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-o-keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@keyframes bg-scrolling-reverse {
  100% {
    background-position: 50px 50px;
  }
}
@-webkit-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@-moz-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@-o-keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}
@keyframes bg-scrolling {
  0% {
    background-position: 50px 50px;
  }
}


body{
    background-color: rgba(0,123,255,1) !important;
    background-image: url('<?php echo site_url("resources/img/bg.png") ?>');
    -webkit-animation: bg-scrolling-reverse 0.92s infinite;
    /* Safari 4+ */
    -moz-animation: bg-scrolling-reverse 0.92s infinite;
    /* Fx 5+ */
    -o-animation: bg-scrolling-reverse 0.92s infinite;
    /* Opera 12+ */
    animation: bg-scrolling-reverse 0.92s infinite;
    /* IE 10+ */
    -webkit-animation-timing-function: linear;
    -moz-animation-timing-function: linear;
    -o-animation-timing-function: linear;
    animation-timing-function: linear;
}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Optica del Sol</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Iniciar Sesi&oacute;n</p>

      <form action="<?php echo site_url("inicio/index"); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="_usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo site_url("resources/plugins/jquery/jquery.min.js");?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url("resources/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url("resources/js/adminlte.min.js");?>"></script>
</body>
</html>
