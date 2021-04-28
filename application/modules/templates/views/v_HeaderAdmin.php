<!DOCTYPE html>
<html lang="en">

<head>  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $titles ;?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/plugins/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/plugins/simple-line-icons/css/simple-line-icons.css">
        <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/font-awesome.min.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('frontend');?>/assets/images/template/favicon.ico" type="image/x-icon" />
    <link href="<?= base_url('frontend');?>/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <script src="<?= base_url('frontend');?>/assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('frontend');?>/assets/plugins/jquery/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url('frontend');?>/assets/plugins/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/css/jquery.dataTables.css">
    <script type="text/javascript" src="<?= base_url('frontend');?>/assets/js/main.js"></script>
    <link href="<?= base_url('frontend');?>/assets/css/ujian.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url('frontend');?>/assets/js/sidein_menu.js"></script>
    <!-- DataTables -->
		<link href="<?= base_url('frontend');?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?= base_url('frontend');?>/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <script>
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);
    </script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color: #27a91e;">
                <a class="navbar-brand brand-logo" href="index.php" style="font-family:Aegyptus;font-weight: bold;font-size: 30px;">
                <img src="<?= base_url('frontend');?>/assets/images/logo/logo.png" alt="logo.png" style="height: 45px;width: 45px;border-radius: 10px;"> <b>BELAJAR</b>
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.php">
                <!-- <img src="../vendor/images/logo.png" alt="logo"/> -->
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item" style="width: 400px;">
                    <a href="#" style="color: #fff;text-decoration: none;"> <b>SMK Muhammadiyah 1 Purbalingga</b></a>
                </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                </ul>
            </div>
        </nav>
        <!-- partial -->
		<div class="container-fluid page-body-wrapper"> 