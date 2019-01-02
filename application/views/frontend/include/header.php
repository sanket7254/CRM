<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mavericks-CRM</title>

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
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/dashboard.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/wizards/stepy.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/forms/validation/validate.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/wizard_stepy.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/pages/picker_date.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->



</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url('dashboard');?>">Mavericks-CRM</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url();?>assets/images/flags/gb.png" class="position-left" alt="">
					</a>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<?php
							$id=$this->session->userdata('adminid');
							$asso_id=$this->session->userdata('associateid');
							if(!($id == NULL)) { ?>
								<?php $base_path = base_url()."uploads/".$profile_data->user_image;?>
								<img src="<?= $base_path; ?>" alt="" style="width: 40px; height: 40px;">
							<?php } else { ?>
								<?php $base_path = base_url()."uploads/associate/".$profile_data->user_image;?>
								<img src="<?= $base_path; ?>" alt="" style="width: 40px; height: 40px;">
							<?php } ?>						
						<span><?= $base_path = $profile_data->firstname;?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<?php $profile="editprofile"; ?>
						<li><a href="<?php echo base_url('myprofile');?>"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="<?php echo base_url('change_password');?>"><i class="icon-key"></i> Change Password</a></li>
						<li><a href="<?php echo base_url('logout');?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav navbar-nav-material">
				<?php 	
					$page = basename($_SERVER['PHP_SELF']);
					$id=$this->session->userdata('adminid');
					$asso_id=$this->session->userdata('associateid');
					if(!($id == NULL))
					{ ?>
						<li class="<?php if($page == 'dashboard'){ echo 'active';} ?>"><a href="<?php echo base_url('dashboard');?>"><i class="icon-display4 position-left"></i> Dashboard</a></li>

						<li class="<?php if($page == 'alladmin' || $page == 'adminsignup'){ echo 'active';} ?>">
							<a href="<?php echo base_url('alladmin');?>">
								<i class="icon-make-group position-left"></i> Admin</span>
							</a>
						</li>

						<li class="<?php if($page == 'allassociate' || $page == 'addassociate'){ echo 'active';} ?>">
							<a href="<?php echo base_url('allassociate');?>" class="dropdown-toggle">
								<i class="icon-make-group position-left"></i> Associate
							</a>
						</li>

						<li class="<?php if($page == 'allcustomer' || $page == 'addcustomer' || $page == 'lead_details'){ echo 'active';} ?>">
							<a href="<?php echo base_url('allcustomer');?>">
								<i class="glyphicon glyphicon-user"></i> Lead</span>
							</a>
						</li>
						<li class="<?php if($page == 'reports'){ echo 'active';} ?>">
							<a href="<?php echo base_url('reports');?>">
								<i class="glyphicon glyphicon-file"></i> Reports</span>
							</a>
						</li>
					<?php } else { ?>
						<li class="<?php if($page == 'dashboard'){ echo 'active';} ?>"><a href="<?php echo base_url('dashboard');?>"><i class="icon-display4 position-left"></i> Dashboard</a></li>

						<li class="<?php if(($page == 'allcustomer') || ($page == 'addcustomer')){ echo 'active';} ?>">
							<a href="<?php echo base_url('allcustomer');?>">
								<i class="glyphicon glyphicon-user"></i> Lead</span>
							</a>
						</li>
						<li class="<?php if($page == 'reports'){ echo 'active';} ?>">
							<a href="<?php echo base_url('reports');?>">
								<i class="glyphicon glyphicon-file"></i> Reports</span>
							</a>
						</li>
					<?php } ?>
				
			</ul>
		</div>
	</div>
	<!-- /second navbar -->