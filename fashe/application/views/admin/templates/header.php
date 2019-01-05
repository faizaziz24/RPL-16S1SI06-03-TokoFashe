<!DOCTYPE html>
<html lang="en">
    <!-- Template Head-->
    <head>
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
      <meta name="author" content="Łukasz Holeczek">
      <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
      <title><?php echo $title; ?></title>
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
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard">
        <img class="navbar-brand-full" src="<?php echo base_url(); ?>assets/admin/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="<?php echo base_url(); ?>assets/admin/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">
        
      </ul>
    </header>