<?php
if ($_SESSION['loggedin']!=true) {
	header('Location:/admin/login');
}
?>
<html>
<head>
	<title>Edit Post | Garlic Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<li role="presentation"><a href="http://www.garliccateringbd.com/">Home</a></li>
			<li role="presentation"><a href="https://www.google.com/analytics/web/?et&authuser=0#report/visitors-overview/a62533390w97684514p101764688/%3Foverview-graphOptions.selected%3Danalytics.nthDay%26overview-graphOptions.primaryConcept%3Danalytics.pageviews/">Analytics</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post">New Post</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>slider">New Slide</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/recent_post">Recent Posts</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/post_archive">Posts Archive</a></li>
			<li role="presentation"><a href="<?php echo base_url(); ?>post/logout">Logout</a></li>
		</ul>
	</div>
	<br>
	<section id="edit_post">
		<div class="container">
			<br>
			<h2>Edit Post</h2>
			<a href="<?php echo base_url(); ?>post" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Upload New Photo</a>
			<hr>
			<br>
			<?php foreach($edit_post as $post):?>
			<br>
			<div style="  text-align: -webkit-center;
			">
			<img src="<?php echo base_url().'/images/'.$post['img_name'] ; ?>" alt="" width="80%" height="60%">
		</div>
		<br><br>
		<form class="form-horizontal" method="POST" action="<?php echo base_url().'post/update_post?id='.$post['id']; ?>"  enctype="multipart/form-data" >

			<br /><br />
			<div class="form-group">
				<!-- validation errors sent from controller -->
				<small style="color:red">
					<?php echo validation_errors(); ?>
				</small>

				<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" value="<?php echo $post['title'] ?>" name="title" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Content</label>
				<div class="col-sm-10">
					<textarea name="content" class="form-control" id="inputPassword3" >
						<?php echo $post['content'] ?>
					</textarea>
				</div>
			</div>
		<?php endforeach?>
		<br><br>
		<button type="submit" class="btn btn-block btn-success" name="post">UPDATE</button>
	</form>

</div>
</section>

</body>
</html>