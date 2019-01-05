<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login Admin</title>
    <!-- Icons-->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>

  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login Admin</h1>
                <p class="text-muted">Sign In to your account admin</p>
                <!-- Flash messages -->
                <?php if($this->session->flashdata('login_failed')): ?>
                    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                <?php endif; ?>

                <?php echo validation_errors(); ?>

                <?php echo form_open('admin/login'); ?>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" value="login" type="submit">Login</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url(); ?>assets/admin/vendors/jquery/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendors/popper.js/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendors/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendors/@coreui/coreui/js/coreui.min.js"></script>

  </body>
</html>
