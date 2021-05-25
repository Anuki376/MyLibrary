<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MyLibrary</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">

</head>
<body>
	<nav class="navbar sticky-top navbar-dark bg-danger navbar-expand-md">

		<a class="navbar-brand" href="<?php echo base_url(); ?> ">MyLibrary</a>

		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="main-navigation">
				
			<ul class="navbar-nav">
					
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?> ">Home</a>
				</li>
					
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>ManageBooks ">Manage Books</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>ManageWishlist ">WishList</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>ManageReports ">Reports</a>
				</li>
					
			</ul>
	
		</div>

	</nav>

	<div class="flex-wrapper backdrop">