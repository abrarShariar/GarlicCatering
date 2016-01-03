<?php
if ($_SESSION['loggedin']!=true) {
	header('Location:/admin/login');
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Banner | Garlic Admin</title>
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
			<li role="presentation"><a href="<?php echo base_url(); ?>post">New Post</a></li>
			<li role="presentation"><a href="#new_banner">New Banner</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>slider">New Slide</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/recent_post">Recent Posts</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/post_archive">Posts Archive</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/logout">Logout</a></li>
		</ul>
	</div>
	<section id="new_banner">
		<div class="container">
			<h2>New Banner</h2>
			<hr>
			<br>
			<form class="form-horizontal" method="POST" action="<?php echo base_url() ?>banner/do_upload"  enctype="multipart/form-data" >
				<!-- Photo upload -->
				<strong>Add Banner:</strong><input type="file" name="userfile" size="20" required/>
				<small>File size should be less than 200KB</small>
				<small></small>
				<h3 style="color:red"> <?php echo $error;?></h3>	
				<br /><br />
				<button type="submit" class="btn btn-primary btn-block" name="post">UPLOAD</button>
			</form>
		</div>
	</section>

