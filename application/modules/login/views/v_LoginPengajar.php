<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMK Muhammadiyah 1 </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" type="image/png" href="<?= base_url('frontend');?>/assets/images/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/plugins/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/plugins/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/plugins/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/plugins/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/plugins/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('frontend');?>/assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/plugins/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/style.css">
  <!-- endinject -->
  <link href="<?= base_url('frontend');?>/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
</head>
<body>
		<div class="limiter">
		<div class="container-login100" style="background-image: url('../frontend/assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <center>
          <h1>Login PENGAJAR</h1>
        </center>
        <br>
        <hr>
				<form method="POST" action="<?= base_url('login/actionpengajar');?>" class="login100-form validate-form">
					<!-- <span class="login100-form-title p-b-49">
						Ruang Belajar
					</span> -->
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span for="nis" class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username" autofocus>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span for="Password" class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
					</div>
					<!-- <div class="text-right p-t-8 p-b-31">
						<a href="https://wa.me/6282167874402">
							Forgot password?
						</a>
					</div> -->
					<div class="container-login100-form-btn m-b-23">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                <button value="LOGIN" name="Login" type="submit" class="login100-form-btn">
                  Login
                </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/plugins/jquery/jquery-3.2.1.min.js"></script>

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

<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/plugins/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/plugins/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('frontend');?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/plugins/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('frontend');?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/plugins/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('frontend');?>/assets/js/main.js"></script>
	<script src="<?= base_url('frontend');?>/assets/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url('frontend');?>/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url('frontend');?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('frontend');?>/assets/plugins/sweetalert/sweetalert.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url('frontend');?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url('frontend');?>/assets/js/misc.js"></script>
</body>