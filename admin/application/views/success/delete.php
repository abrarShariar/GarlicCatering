
<?php
if ($_SESSION['loggedin']!=true) {
	header('Location:/admin/login');
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Success | Garlic Admin </title>
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
			<li role="presentation"><a href="<?php echo base_url(); ?>/post">New Post</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>banner">New Banner</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>slider">New Slide</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/recent_post">Recent Posts</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/post_archive">Posts Archive</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/logout">Logout</a></li>

		</ul>
	</div>

	<section id="delete success">
		<div class="container">
			<br><br>
			<h2>Post Successfully Deleted</h2>
			<a href="<?php echo base_url() ?>post"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add a New Post</a>
			<hr>
			<br>

		</section>

	</body>
	</html>