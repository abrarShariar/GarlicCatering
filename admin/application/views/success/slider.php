<?php
if ($_SESSION['loggedin']!=true) {
	header('Location:/admin/login');
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">	
<section>
	<div class="container">
		<br><br>
		<h2>Current Slides</h2>
		<hr>
		<?php foreach($slider_data as $slider):	?>
		<h4>
			<?php
			echo $slider['img_name'];
			?>
		</h4>
		<br>
		<div style="text-align: -webkit-center;">
			<img src="<?php echo base_url().'/images/'.$slider['img_name'] ; ?>" alt="" style="  width: 50%;
			height: 50%;">		
		</div>
		<hr>
	<?php endforeach?>

</section>


