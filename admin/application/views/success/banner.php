	<?php
	if ($_SESSION['loggedin']!=true) {
		header('Location:/admin/login');
	}
	?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">	
	<div class="container">

		<?php foreach($banner_data as $banner):	 ?>
		<br><br>
		<h2>Current Banner</h2>
		<hr>
		<br><br>
		<img src="<?php echo base_url().'/images/'.$banner['img_name'] ; ?>" alt="" style="  width: 100%;
		height: 145px;">

	<?php endforeach?>

	<br><br><br>
</div>
