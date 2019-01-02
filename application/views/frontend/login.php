<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mavericks-CRM Pvt. Ltd.</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/admin/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/admin/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/admin/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/admin/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/login_validation.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container login-cover">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Form with validation -->
				<?php echo form_open('LoginController/login_check'); ?>
				<form action="index.html" class="form-validate">
					<div class="panel panel-body login-form" style="margin-top: 100px;">
						<div class="text-center">
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
							<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
						</div>
						<?php if( $error = $this->session->flashdata('login_failed')): ?>
					        <div class="alert alert-danger">
					        	<?= $error ?>
					        </div>    
				        <?php endif; ?>
						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="Username" name="username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
							<?php echo form_error('username');?>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="password" class="form-control" placeholder="Password" name="password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
							<?php echo form_error('password');?>
						</div>

						<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">

								</div>

								<div class="col-sm-6 text-right">
									<a href="login_password_recover.html">Forgot password?</a>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn bg-pink-400 btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
						</div>

						<!-- <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
						<a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a> -->
						<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Footer -->
	<div class="footer text-white text-center">
		&copy; 2018. <a href="#" class="text-white">Mavericks Pvt. Ltd</a>
	</div>
	<!-- /footer -->

</body>
</html>
