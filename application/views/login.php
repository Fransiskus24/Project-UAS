<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/feather/feather.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/typicons/typicons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/vertical-layout-light/style.css'); ?>">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<?php echo $this->session->flashdata('login'); ?>
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<img src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="logo">
							</div>
							<h4>Hello! let's get started</h4>
							<h6 class="fw-light">Sign in to continue.</h6>
							<form class="pt-3" method="POST" action="<?php echo base_url('login'); ?>">
								<div class="form-group">
									<input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
									<small class="text-danger"><?= form_error('email'); ?></small>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
									<small class="text-danger"><?= form_error('password'); ?></small>
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?php echo base_url(); ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url(); ?>js/off-canvas.js"></script>
	<script src="<?php echo base_url(); ?>js/hoverable-collapse.js"></script>
	<script src="<?php echo base_url(); ?>js/template.js"></script>
	<script src="<?php echo base_url(); ?>js/settings.js"></script>
	<script src="<?php echo base_url(); ?>js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
