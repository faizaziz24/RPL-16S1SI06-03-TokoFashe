<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fashe | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="asset/css/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/css/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="asset/css/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
  <link rel="stylesheet" href="asset/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="asset/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Admin | </b>Fashe
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="asset/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="asset/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="asset/css/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="asset/js/adminlte.min.js"></script>
</body>
</html>
