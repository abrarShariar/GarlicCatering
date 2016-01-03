<?php
if ($_SESSION['loggedin']!=true) {
	header('Location:/admin/login');
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">	
	<title>Recent Post | Garlic Admin</title>
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
			<li role="presentation"><a href="<?php echo base_url(); ?>banner">New Banner</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>slider">New Slide</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/recent_post">Recent Posts</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/post_archive">Posts Archive</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/logout">Logout</a></li>
		</ul>
	</div>
	<!-- recent post display -->
	<br><br><br>
	<h1  style=" text-align: -webkit-center;">Recent Post</h1>
	<?php foreach($post_data as $post):?>
	
	<div class="container">
		<hr>
		<br><br>
		<div class="col-md-9">
			<img src="<?php echo base_url().'/images/'.$post['img_name'] ; ?>" alt="" width="80%" height="60%">
			<br>
			<strong>Image Details:</strong>
			<ul>
				<li>Name: &nbsp<?php echo $post['img_name'] ?></li>
				<li>Destination: &nbsp<?php echo $post['img_path'] ?></li>
				<li>Type: &nbsp<?php echo $post['img_type'] ?></li>
			</ul>
		</div>
		<div class="col-md-3">
			<a  href="<?php echo base_url().'post/edit_post?id='.$post['id']; ?>">
				<button type="button" class="btn btn-sm btn-success">Edit</button>
			</a>

			<a href="<?php echo base_url().'post/delete_post?id='.$post['id']; ?>">
				<button type="button" class="btn btn-sm btn-danger">Delete</button>
			</a>

			<h2><?php echo $post['title'] ?></h2>
			<em><?php echo $post['date_create'] ?></em>
			<br>
			<h4><?php echo $post['content']; ?></h4>
		</div>   
	</div>
<?php endforeach?>

</body>
</html>
