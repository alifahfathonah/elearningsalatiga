<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK Muhammadiyah 1 </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?base_url('login/administrator');?>"><b><?= $login ;?></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <form action="<?= base_url('login/actionadmin');?>" method="POST">
        <div class="input-group mb-3">
          <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username Anda ..." autocomplete="off" autofocus required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user-circle"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password ..." autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('frontend');?>/assets/plugins/jquery/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type="text/javascript">
		<?php if ($this->session->flashdata('success')) {?>
				toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php } elseif ($this->session->flashdata('error')) {?>
				toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php } elseif ($this->session->flashdata('warning')) {?>
				toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php } elseif ($this->session->flashdata('info')) {?>
				toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php }?>
</script>

<!-- Bootstrap 4 -->
<script src="<?= base_url('frontend');?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('frontend');?>/assets/js/adminlte.min.js"></script>
</body>
</html>
