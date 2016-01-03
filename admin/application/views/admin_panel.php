<?php
if ($_SESSION['loggedin']!=true) {
	header('Location:/admin/login');
}
$admin=$_SESSION['admin_username'];
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel | Garlic Catering </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">	
	<style type="text/css">
	.nav{

	/*	float:left;
		width:25%;
		background-color: rgba(6, 8, 8, 0.84);*/
	}
	#navbar{

/*		width:25%;
*/		background-color: rgba(6, 8, 8, 0.84);

}
.nav li a{
	color: #B75133;

}
#inputPassword3{

	height:40%;
	width:100%;
}

</style>
</head>
<body>
	<!-- navbar -->
	<div id="navbar" >
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation"><a href="http://www.garliccateringbd.com/">Website</a></li>
			<li role="presentation"><a href="https://www.google.com/analytics/web/?et&authuser=0#report/visitors-overview/a62533390w97684514p101764688/%3Foverview-graphOptions.selected%3Danalytics.nthDay%26overview-graphOptions.primaryConcept%3Danalytics.pageviews/">Analytics</a></li>
			<li role="presentation"><a href="#new_post">New Post</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>banner">New Banner</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>slider">New Slide</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/recent_post">Recent Posts</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/post_archive">Posts Archive</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/logout">Logout</a></li>
		</ul>
	</div>

	<!-- welcome note -->

	<div style=" text-align: -webkit-center;" >
		<h1>Hello, <?php echo $admin ?> !!</h1>
		<h3>Welcome to Garlic Catering Admin Panel.</h3>
	</div>
	<br>

	<!-- New Post Create -->
	<section id="new_post">
		<div class="container">
			<h2>New Post</h2>
			<hr>
			<br>
			<form class="form-horizontal" method="POST" action="<?php echo base_url() ?>post/do_upload"  enctype="multipart/form-data" >
				<!-- Photo upload -->
				<strong>Add Photo:</strong><input type="file" name="userfile" size="20" required/>
				<small>File size should be less than 100KB</small>
				<h3 style="color:red"> <?php echo $error;?></h3>	
				<br /><br />
				<div class="form-group">
					<!-- validation errors sent from controller -->

					<small style="color:red">
						<?php echo validation_errors(); ?>
					</small>

					<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Title of the post" name="title" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Content</label>
					<div class="col-sm-10">
						<textarea name="content" class="form-control" id="inputPassword3" >
						</textarea>
					</div>
				</div>
				<!-- ::::::::UNDER DEVELOPMENT::::::::: -->
				<!-- image upload -->
				<br>
				<br>
				<button type="submit" class="btn btn-primary btn-block" name="post">POST</button>
			</form>
		</div>
	</section>
	<br>
	<br>
	<!-- recent post -->
</body>
</html>

