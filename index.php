<?php
$servername = "localhost";	
$username = "root";
$password = "";			//insert your password here
$dbname="garlic";		//insert your database name here
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// RECENT
$sql="SELECT * FROM post ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// BANNER
$sql_ban="SELECT * FROM banner ORDER BY id DESC LIMIT 1";
$result_ban=mysqli_query($conn, $sql_ban);

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
	<meta charset="UTF-8"/>
	<title>Garlic Catering | Catering Business Dhaka</title>
	<meta name="description" content="Catering Business in Dhaka,Bangladesh | Garlic Catering | A unique catering business with your satisfaction at heart.">
	<meta name="keywords" content="catering business dhaka,catering business bangladesh,garlic catering, Garlic Catering, Dhaka, Bangladesh, Garliccatering Dhaka, catering, garlic catering dhaka, traditional, modern,best catering,food">
	<meta name="author" content="garliccateringbd.com">
	<meta name="googlebot" content="all">
	<meta name="googlebot-news" content="all">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon"  href="http://www.clker.com/cliparts/F/B/O/x/u/B/knife-and-fork-orange-md.png" type="image/gif" sizes="20x20">
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/theme.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<script type="js/bootstrap.min.js"></script>
	<script type="js/jquery-1.11.2.min.js"></script>
	<style type="text/css">

	.btn:hover{

		background-color: rgba(31, 156, 237, 0.84);
	}
	#team_pic{

		height: 30%;
		width: 80%;
	}
	#programe{
		font-variant: small-caps;
		font-weight: 800;
	}
	.restitem h4{
		border-style: outset;
		border-radius: 5px;

	}
	input[type=checkbox]{
		zoom:1.7;
	}

	#s1 h5{
		color: rgb(10, 52, 107);
	}
	#s2 h5{
		color: rgb(200, 30, 140);
	}
	#s3 h5{
		color: rgb(205, 80, 16);

	}
	#s4 h5{
		color: rgb(123, 52, 152);

	}
	#s5 h5{
		color: rgb(236, 18, 18);

	}
	#s6 h5{
		color: rgb(37, 128, 22);

	}
	#s7 h5{
		color: rgb(22, 132, 132);

	}
	#s8 h5{
		color: rgba(118, 9, 9, 0.95);

	}
	#s9 h5{
		color: rgb(24, 184, 26);

	}
	#s10 h5{
		color: rgb(89, 46, 218);

	}

	#s11 h5{
		color: rgb(190, 5, 5);

	}
	#add{
		background-color:rgb(100, 6, 28);
	}
	#add:hover{
		background-color: rgb(236, 81, 31);
	}
	</style>
	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-62533390-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>
<body>

	<!-- Facebook page plugin -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=815403985162109";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Facebook plugin ends -->
	<!--wrapper start-->
	<div class="wrapper" id="wrapper" style="background-image: url('images/background.jpg');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;">

	
	<!-- banner -->
	<?php
	while($ban = mysqli_fetch_assoc($result_ban)) {
		?>
		<div>
			<img src="admin/images/<?php echo $ban['img_name'] ?>" alt="Garlic Catering Banner" width="100%" style=" height: 145px">
		</div>
		<?php
	}
	?>
	<div class="banner row" id="banner" >	
		<div class="container text-center" style="height:580px;  width: 100%;">
			<!-- photo slider fade -->
			<?php
			require_once('slider.php');
			?>
		</div>
	</div>

	<!--Main Navbar -->

	<div class="menu" style="margin-bottom:0%">
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="container">
							<div class="navArea">
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li class="menuItem active"><a href="#wrapper">Home</a></li>
										<li class="menuItem"><a href="#aboutus">About</a></li>
										<li class="menuItem"><a href="#specialties">Menu</a></li>
										<li class="menuItem"><a href="#gallery">Programs</a></li>
										<li class="menuItem"><a href="#whychooseus">Why Choose us</a></li>
										<li class="menuItem"><a href="#contact">Contact</a></li>
									</ul>
									<!-- MORE Box -->
									<div style="float:right">

										<button type="button" class="btn" id="more_btn" style="margin-right:-25px;background-color: rgba(31, 66, 237, 0.77);color:black;">
											<strong>More
												<i class="fa fa-chevron-right" id="right"></i>
											</strong>
										</button>

										<!-- Side Navbar -->

										<div id="more_box" style="display:none;   margin-right: -14%;
										padding-top:2%;background-color: rgb(51, 51, 51)">
										<br>

										<h5><a href="#feedback">Recent</a></h5>
										<br>
										<h5><a href="#food_ingredients">Food Ingredients</a></h5>
										<br>
										<h5><a href="#social_responsibility">Social Responsibility</a></h5>
										<br>
										<h5><a href="#ourteam">Our Team</a></h5>
										<br>
										<h5><a href="#contact">Find Us</a></h5>
										<br>
										<a href="https://www.facebook.com/pages/Garlic-Catering/862027683838279?fref=ts">
											<h4 style="color: #FFF; display:inline">Follow Us &nbsp &nbsp </h4> 
											<h4 style="color: #FFF;font-size:xx-large;display:inline"><i class="fa fa-facebook-square" style="color:#3b5998"></i>
											</h4>
										</a>
										<br>
										<br>
									</div>
								</div>
								<!-- More section ends -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!--about us-->
<section class="aboutus" id="aboutus">
	<!--Javascripts-->
	<script src="js/jquery.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/menustick.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/easing.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/masonry.js"></script>
	<script src="js/imgloaded.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/colorfinder.js"></script>
	<script src="js/gridscroll.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/common.js"></script>
	<script type="text/javascript">
	jQuery(function($) {
		$(document).ready( function() {
			//enabling stickUp on the '.navbar-wrapper' class
			$('.navbar-wrapper').stickUp({
				parts: {
					0: 'banner',
					1: 'aboutus',
					2: 'specialties',
					3: 'gallery',
					4: 'feedback',
					5: 'contact'
				},
				itemClass: 'menuItem',
				itemHover: 'active',
				topMargin: 'auto'
			});
		});
		$("#more_btn").click(function(){
			$("#more_box").toggle("slow");
		});
	});

	</script>
	<br><br><br><br><br>
	<div class="container">
		<div class="heading text-center">
			<h2 style="background-color: white;
			opacity: 0.7;">About Garlic Catering</h2>
			<img class="dividerline" src="img/sep.png" alt="" style="opacity: 0.7;">
			<br>
			<p style="background-color: rgb(3, 3, 3);  color: aliceblue;"> Garlic Catering is a traditional organization but we introduce modern catering service all time. We have 10 years work experience in our own <em>Rongdhanu Community Center </em>  and also work at other community center. Our management team is strong & gather as like as Garlic shape.
				<br>
				<br>
				We attain all kinds of social programme like Marriage Ceremony, Birthday, Picnic, Annual Meeting, Re-union, Official Seminar and lots of programme. Our strength is Quality Food & Just in time food delivery.
			</p>
		</div>					
	</div>
</section>

<!--menu-->
<section class="specialties" id="specialties">
	<div class="container">
		<div class="heading text-center">
			<h2 style="  background-color: white;
			opacity: 0.7;">Menu</h2>
			<img class="dividerline" src="img/sep.png" alt="" style="opacity: 0.7">
		</div>
		<br>
		<!-- My Selected Menu -->

		<div class="col-md-12" style="margin-bottom: 8%;
		">

		<div class="col-md-12" style="  background-color: rgb(3, 3, 3);  color: aliceblue;">
			Garlic Catering offers food in three categories. These are: <br>
			#Box Food <br>
			#Dining Food <br>
			#Selected Food <br>
			From the above categories you can choose food items and pacakages from a wide range of options as
			shown below:
			<br>			<br>
			Food items you select from the "SELECTED Food" will be displayed in the box - My Selected Menu&nbsp<i class="fa fa-caret-right"></i>			
			<br>			<br>
			<em>NOTE: Food price can be changed according to the market price</em>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="margin-top: 1%;">
			<button type="button" class="btn" style="width:100%" id="box_food">
				<h3 class="maincat notopmarg text-center" style="cursor: pointer;">
					BOX Food 
				</h3>
			</button>
			<script type="text/javascript">
			$("#box_food").click(function(){
				$("#box_food_menu").toggle("slow");
			});

			</script>
			<div class="restmenuwrap" id="box_food_menu" style="display:none;background-color: rgba(43, 118, 127, 1);">
				<div class="restitem clearfix">
					<h4 style="color: #FFFEFE;  background-color: rgba(1, 2, 2, 0.86);">
						1. Chicken Biryani
						<br>
						Tissue + Salad
					</h4>

				</div>
				<div class="restitem clearfix">
					<h4 style="  background-color: rgb(144, 172, 228);">
						2. Tehari Beef
						<br>
						Tissue + Salad
					</h4>

				</div>
				<div class="restitem clearfix">
					<h4 style="background-color: rgb(144, 172, 228);">
						3. Tehari Mutton
						<br>
						Tissue + Salad
					</h4>

				</div>
				<div class="restitem clearfix">
					<h4 style="background-color: rgba(242, 38, 2, 0.86);   color: #FFFFFF;">
						4. Kacchi Biryani Beef
						<br>
						Tissue + Salad

					</h4>

				</div>
				<div class="restitem clearfix">
					<h4 style="color: #FFFFFF;  background-color: rgba(242, 38, 2, 0.86);">
						5. Kacchi Biryani Mutton
						<br>
						Tissue + Salad
					</h4>

				</div>

				<div class="restitem clearfix">
					<h4 style="background-color: rgba(121, 32, 152, 0.51);">
						6. Plain Polao,
						Beef  Masala Chaap
						<br>
						Tissue + Salad
					</h4>

				</div>

				<div class="restitem clearfix">
					<h4 style="background-color: rgba(121, 32, 152, 0.51);">
						7. Plain Polao,
						Mutton  Masala Chaap
					</h4>
				</div>
				<div class="restitem clearfix">
					<h4 style="background-color: rgba(121, 32, 152, 0.51);">
						8. lain Polao,
						Chicken  Masala Chaap
					</h4>

				</div>

				<div class="restitem clearfix">
					<h4 style="background-color: rgba(230, 98, 11, 0.93);color: #FFF;">
						9. Vuna Khichuri, 
						Beef  Masala Chaap
						<br>
						Tissue + Salad

					</h4>
				</div>

				<div class="restitem clearfix">
					<h4 style="background-color: rgba(230, 98, 11, 0.93);color: #FFF;">
						10. Vuna Khichuri,
						Mutton  Masala Chaap
						<br>
						Tissue + Salad
					</h4>

				</div>

				<div class="restitem clearfix">
					<h4 style="background-color: rgba(230, 98, 11, 0.93);color: #FFF;">
						11. Vuna Khichuri,
						Chicken  Masala Chaap
						<br>
						Tissue + Salad

					</h4>
				</div>

				<div class="restitem clearfix">
					<h4 style="background-color: rgb(195, 240, 245);">
						12. Plain Polao,
						Masala  Dim
						<br>
						Tissue + Salad
					</h4>

				</div>
				<a id="box_less" style="cursor:pointer;float:right" href="#specialties">
					<i class="fa fa-chevron-circle-up"></i>
					Show Less</a>

					<script type="text/javascript">

					$("#box_less").click(function(){
						$("#box_food_menu").toggle("slow");
					});

					</script>

				</div>
			</div>

			<div class="col-md-12" style="margin-top: 1%;">

				<button type="button" class="btn" style="width:100%" id="dine_food">
					<h3 class="maincat notopmarg text-center" style="cursor:pointer" >
						DINING Food</h3>
					</button>

					<script type="text/javascript">

					$("#dine_food").click(function(){
						$("#dine_food_menu").toggle("slow");
					});

					</script>

					<div class="restmenuwrap" id="dine_food_menu" style="display:none;  background-color: rgb(177, 36, 34);">

						<div class="restitem clearfix" >
							<h4 style=" background-color: rgba(235, 13, 13, 0.71); cursor:pointer" id="A">
								Package A </h4>
								<p>
									<br>

									<script type="text/javascript">

									$("#A").click(function(){
										$("#A_menu").toggle();
									});

									</script>
									<h5 style="display:none;color:aliceblue" id="A_menu">
										Plain Polao / Shahi Polao
										<br>
										Chicken Rost/Gril/Crumb Fry
										<br>
										Beef Rezala
										<br>
										Chinese Vegetable/Mixed Vegetable/Deshe Vegetable
										<br>
										Jali Kabab/Tikka Kabib
										<br>
										Shahi Chatni /Chatni Aloo Bukhara
										<br>
										Shahi Zarda/Plan Zarda
										<br>
										Shahi Borhane  Masala
										<br>
										Pic Salad/Mixed Salad
										<br>
										Mineral Watar
										<br>
										Tissue Paper
										<br>
										Pan Supari + + 
									</h5>
								</p>
							</div>
							<div class="restitem clearfix">
								<h4 style="background-color: rgba(169, 20, 134, 0.91);
								color: aliceblue; cursor:pointer" id="B">
								Package B</h4>
								<p>
									<br>

									<script type="text/javascript">

									$("#B").click(function(){
										$("#B_menu").toggle();
									});

									</script>
									<h5 style="display:none;color:aliceblue" id="B_menu">
										Plain Polao / Shahi Polao<br>
										Chicken Rost/Gril/Crumb Fry 	<br>
										Mutton Rezala<br>
										Chinese Vegetable/Mixed Vegetable/Deshe Vegetable<br>
										Jali Kabab/Tikka Kabib<br>
										Shahi Chatni /Chatni Aloo Bukhara<br>
										Shahi Zarda/Plan Zarda<br>
										Shahi Borhane  Masala<br>
										Pic Salad/Mixed Salad<br>
										Mineral Watar<br>
										Tissue Paper<br>
										Pan Supari + + <br>


									</h5>
								</p>
							</div>
							<div class="restitem clearfix">
								<h4 style="  background-color: rgba(4, 132, 198, 0.65); cursor:pointer" id="C">
									Package C</h4>
									<p>
										<br>

										<script type="text/javascript">

										$("#C").click(function(){
											$("#C_menu").toggle();
										});

										</script>
										<h5 style="display:none;color:aliceblue" id="C_menu">
											Malai Plain Polao <br>
											Chicken Rost/Gril/Crumb Fry<br> 	
											Chicken Rezala<br>
											Chinese Vegetable/Mixed Vegetable/Deshe Vegetable<br>
											Jali Kabab/Tikka Kabib<br>
											Shahi Chatni /Chatni Aloo Bukhara<br>
											Shahi Zarda/Plan Zarda<br>
											Shahi Borhane   Masala<br>
											Pic Salad/Mixed Salad<br>
											Mineral Watar<br>
											Tissue Paper<br>
											Pan Supari + +<br>

										</h5>
									</p>
								</div>
								<div class="restitem clearfix">

									<h4 style="background-color: rgba(10, 11, 11, 0.8);
									color: aliceblue; cursor:pointer" id="D">
									Package D</h4>
									<p>
										<br>

										<script type="text/javascript">

										$("#D").click(function(){
											$("#D_menu").toggle();
										});

										</script>

										<h5 style="display:none;color:aliceblue" id="D_menu">
											Kacchi Biryani Mutton <br>
											Chicken Rost/Gril/Crumb Fry <br>	
											Chinese Vegetable/Mixed Vegetable/Deshe Vegetable<br>
											Jali Kabab/ Beef Shame Kabab /Chicken Shashli Kabab<br>
											Shahi Chatni /Chatni Aloo Bukhara<br>
											Shahi Fruit Zarda / Zafrani Zarda / Phirni Cream<br>
											Shahi Borhane  Masala<br>
											Pic Mosolla Salad<br>
											Mineral Watar<br>
											Tissue Paper<br>
											Pan Supari + + <br>

										</h5>
									</p>
								</div>


								<div class="restitem clearfix">

									<h4 style="  background-color: rgba(204, 88, 12, 1);
									cursor:pointer" id="E">
									Package E</h4>
									<p>
										<br>

										<script type="text/javascript">

										$("#E").click(function(){
											$("#E_menu").toggle();
										});

										</script>
										<h5 style="display:none;color:aliceblue" id="E_menu">
											Kacchi Biryani  Beef <br>
											Chicken Rost/Gril/Crumb Fry <br>	
											Chinese Vegetable/Mixed Vegetable/Deshe Vegetable <br>
											Jali Kabab/ Beef Shame Kabab <br>
											Shahi Chatni /Chatni Aloo Bukhara <br>
											Shahi Fruit Zarda / Phirni Cream <br>
											Shahi Borhane  Masala <br>
											Pic Salad/Mixed Salad <br>
											Mineral Watar <br>
											Tissue Paper <br>
											Pan Supari + + <br>

										</h5>
									</p>
								</div>


								<div class="restitem clearfix">

									<h4 style="  background-color: rgb(206, 75, 142);
									color: aliceblue; cursor:pointer" id="F" >
									Package F</h4>
									<p>
										<br>

										<script type="text/javascript">

										$("#F").click(function(){
											$("#F_menu").toggle();
										});

										</script>

										<h5 style="display:none;color:aliceblue" id="F_menu">
											Shahi Morog Polao <br>
											Chicken Rost/Gril/Crumb Fry <br>	
											Chinese Vegetable/Mixed Vegetable/Deshe Vegetable <br>
											Jali Kabab/ Beef Shame Kabab <br>
											Shahi Chatni /Chatni Aloo Bukhara <br>
											Shahi Fruit Zarda / Shahi Fruit Malai Zarda/Phirni Cream <br>
											Shahi Borhane   Masala <br>
											Pic Salad/Mixed Salad <br>
											Mineral Watar <br>
											Tissue Paper <br>
											Pan Supari + + <br>

										</h5>
									</p>
								</div>

								<a id="dine_less" style="cursor:pointer;float:right" href="#specialties">
									<i class="fa fa-chevron-circle-up"></i>
									Show Less</a>

									<script type="text/javascript">

									$("#dine_less").click(function(){
										$("#dine_food_menu").toggle("slow");
									});

									</script>
								</div>
							</div>
							<div class="col-md-12" style="margin-top: 1%;">

								<button type="button" class="btn" style="width:100%" id="select_food">
									<h3 class="maincat notopmarg text-center">SELECTED Food</h3>
								</button>

								<div class="restmenuwrap" id="select_food_menu" style="display:none;background-color: rgba(172, 200, 103, 1);">
									<form id="info">


										<script type="text/javascript">

										$("#select_food").click(function(){
											$("#select_food_menu").toggle("slow");
										});

										</script>
										<div class="col-md-4">

											<div class="restitem clearfix" id="s1">
												<h5>
													<input type="checkbox" name="sada_polao">
													Shahi  Sada Polao
												</h5>

												<h5>
													<input type="checkbox" name="malai_polao">

													Shahi Malai Polao 
												</h5>


												<h5>
													<input type="checkbox" name="sobji_polao">

													Sahi  Sobji  Polao 
												</h5>
												<h5>
													<input type="checkbox" name="burinda_polao">

													Kofta Burinda Polao 
												</h5>
												<h5>
													<input type="checkbox" name="masala_polao">
													Badam Masala Polao 
												</h5>
												<h5>
													<input type="checkbox" name="vuna_khichuri">
													Vuna Khichuri
												</h5>
												<h5>
													<input type="checkbox" name="plain_rice">
													Plain Rice 
												</h5>

											</div>

											<div class="restitem clearfix" id="s2">
												<h5>
													<input type="checkbox" name="masala_tehari">
													Masala Tehari-Beef/Mutton
												</h5>
												<h5>
													<input type="checkbox" name="malai_tehari">
													Malai Tehari-Beef/Mutton
												</h5>
												<h5>
													<input type="checkbox" name="hyderbad_tehari">
													Hyderabadi Tehari- Beef/Mutton
												</h5>
												<h5>
													<input type="checkbox" name="puran_tehari">
													Puran Dhakar Tehari-Beef/Mutton
												</h5>

											</div>
											<div class="restitem clearfix" id="s3">

												<h5>												
													<input type="checkbox" name="biriyani_beef">
													Kacchi Biryani  Beef											
												</h5>

												<h5>
													<input type="checkbox" name="biriyani_mutton">
													Kacchi Biryani Mutton	

												</h5>

												<h5>													
													<input type="checkbox" name="hyderabad_biriyani">
													Hyderabadi Dum Biryani
												</h5>

												<h5>
													<input type="checkbox" name="shahimorog_polao">

													Shahi Morog Polao
												</h5>

												<h5>
													<input type="checkbox" name="malaimorog_polao">
													Malai Morog Polao
												</h5>

												<h5>
													<input type="checkbox" name="masalamorog_polao">

													Masala Morog Polao
												</h5>

											</div>

											<div class="restitem clearfix" id="s4"> 

												<h5>	
													<input type="checkbox" name="chicken_roast">

													Chicken Roast - Desi Murgi
												</h5>

												<h5>
													<input type="checkbox" name="tikka_grill">

													Chicken Tikka  Grill
												</h5>


												<h5>
													<input type="checkbox" name="creme_fry">

													Chicken	Crumbs Fry												</h5>

												</div>



											</div>

											<div class="col-md-4">

												<div class="restitem clearfix" id="s5">

													<h5>
														<input type="checkbox" name="rezala_beef">

														Rezala Beef
													</h5>

													<h5>
														<input type="checkbox" name="rezala_mutton">

														Rezala Mutton
													</h5>

													<h5>
														<input type="checkbox" name="rezala_chicken">

														Rezala Chicken
													</h5>

													<h5>
														<input type="checkbox" name="vuna_beef">

														Kala Vuna Beef
													</h5>

													<h5>
														<input type="checkbox" name="vuna_mutton">

														Kala Vuna Mutton
													</h5>

												</div>
												<div class="restitem clearfix" id="s6">


													<h5>
														<input type="checkbox" name="rui_fry">

														Rui Mas Fry / Dopiaza
													</h5>

													<h5>
														<input type="checkbox" name="rup_chada">

														Rup Chada Mas Fry / Dopiaza
													</h5>


													<h5>
														<input type="checkbox" name="chingri_fry">

														Chingri Mas Fry / Dopiaza
													</h5>

													<h5>
														<input type="checkbox" name="hilsa_fry">

														Hilsa  Mas Fry / Dopiaza
													</h5>

												</div>
												<div class="restitem clearfix" id="s7">
													<p>
														<h5>
															<input type="checkbox" name="mixed_vegi">

															Mixed Vegetable
															<br>
															<input type="checkbox" name="chinese_vegi">

															Chinese Vegetable
															<br>
															<input type="checkbox" name="deshi_vegi">

															Deshi Vegetable Masala 
														</h5>
													</p>
												</div>


												<div class="restitem clearfix" id="s8">

													<h5>
														<input type="checkbox" name="jali_kabab">

														Jali Kabab
													</h5>

													<h5>
														<input type="checkbox" name="tikka_kabab">

														Tikka Kabab
													</h5>

													<h5>
														<input type="checkbox" name="shami_kebab">

														Shami Kabab
													</h5>

													<h5>
														<input type="checkbox" name="shashlik_kabab">

														Shashlik Kabab
													</h5>

													<h5>
														<input type="checkbox" name="seekh_kabab">

														Seekh Kabab
													</h5>

												</div>



											</div>

											<div class="col-md-4">


												<div class="restitem clearfix" id="s9">


													<h5>
														<input type="checkbox" name="zarda_plan">

														Zarda Plan
													</h5>

													<h5>
														<input type="checkbox" name="zarda_shahi">

														Zarda Shahi 
													</h5>

													<h5>
														<input type="checkbox" name="zarda_malai">

														Zarda Malai 
													</h5>

													<h5>
														<input type="checkbox" name="zarda_fruit">

														Zarda Shahi Fruit 
													</h5>

													<h5>
														<input type="checkbox" name="zarda_zafrani">

														Zarda Zafrani 
													</h5>

													<h5>
														<input type="checkbox" name="phirni_shahi">

														Phirni Shahi
													</h5>

													<h5>
														<input type="checkbox" name="phirni_cream">

														Phirni Cream
													</h5>

													<h5>
														<input type="checkbox" name="phirni_fruit">

														Phirni  Fruit
													</h5>

													<h5>
														<input type="checkbox" name="phirni_vegetable">

														Phirni   Vegetable
													</h5>

													<h5>
														<input type="checkbox" name="shahi_tukda">

														Shahi Tukda
													</h5>

													<h5>
														<input type="checkbox" name="pudding_pic">

														Pudding Pic
													</h5>

													<h5>
														<input type="checkbox" name="misti_doi">

														Misti Doi
													</h5>
												</div>


												<div class="restitem clearfix" id="s10">

													<h5>
														<input type="checkbox" name="pic_salad">

														Pic Salad
													</h5>

													<h5>
														<input type="checkbox" name="masala_salad">

														Pic  Masala Salad 
													</h5>

													<h5>
														<input type="checkbox" name="mixed_salad">

														Mixed Salad
													</h5>

													<h5>
														<input type="checkbox" name="mixmasala_salad">

														Mixed  Masala  Salad
													</h5>

												</div>

												<div class="restitem clearfix" id="s11">


													<h5>

														<input type="checkbox" name="hot_coffee">

														Hot Coffee
													</h5>

													<h5>
														<input type="checkbox" name="cold_coffee">

														Cold Coffee
													</h5>

													<h5>
														<input type="checkbox" name="masala_tea">

														Masala tea
													</h5>

													<h5>
														<input type="checkbox" name="shahi_mosolla">

														Pan + Shahi Masala
													</h5>
													<h5>
														<input type="checkbox" name="garlic_mosolla">

														Garlic Pan Masala
													</h5>
												</div>

											</div>
											<button type="submit" class="btn btn-success btn-block" id="add">											<i class="fa fa-shopping-cart"></i>
												&nbsp Add To My Selected Menu

											</button>
											<br>
											<h5 style="display:none" id="success">Selected items added !!!	
												<br>
												<p>See below.</p>	
											</h5>	


											<script type="text/javascript">
											$("#add").click(function(){
												$("#success").show("slow");
											});

											$("#view").click(function(){
												$("#success").hide();
											});

											</script>

										</form>

										<a id="select_less" style="cursor:pointer;float:right" href="#specialties">
											<i class="fa fa-chevron-circle-up"></i>
											Show Less</a>

											<script type="text/javascript">

											$("#select_less").click(function(){
												$("#select_food_menu").toggle("slow");
											});

											</script>
										</div>
										<div class="well" style="background-color: rgba(174, 11, 4, 0.86);">
											<H2 style="  color: aliceblue;">&nbsp<i class="fa fa-shopping-cart"></i> <br>
												My Selected Menu: 
											</H2>	
											<div id="output" style="color: aliceblue;"></div>
										</div>	
									</div>
								</div>	
							</div>
						</section>


						<!--Programs gallery-->

						<section class="gallery" id="gallery">
							<div class="container">
								<div class="heading text-center">
									<h2 style="  background-color: white;
									opacity: 0.7;">Programs</h2>
									<img class="dividerline" src="img/sep.png" alt="" style="opacity: 0.7;">
								</div>

								<div id="grid-gallery" class="grid-gallery">

									<section class="grid-wrap">
										<div class="col-md-offset-2">

											<ul class="grid">
												<li class="grid-sizer"></li><!-- for Masonry column width -->				
												<li>
													<figure id="social_thumb">
														<img src="images/SocialProgramme.jpg" alt="Garlic Catering"/>
														<figcaption><h3> Social </h3>
														</figcaption>
													</figure>
													<br>
													<p id="programe" style="  color: rgba(27, 106, 213, 1); display:none;background-color: rgb(1, 2, 2);" class="social_box"><i class="fa fa-hand-o-right"></i>Wedding Ceremony&nbsp (Biye)
														<br><br>
														<i class="fa fa-hand-o-right"></i>Wedding Reception &nbsp(Bou Bhat)
														<br><br>
														<i class="fa fa-hand-o-right"></i>Turmeric Ceremony &nbsp(Gaye Holud)
														<br><br>
														<i class="fa fa-hand-o-right"></i>Birthday Party 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Marriage Anniversary &nbsp(Bibah Barsiki)
														<br><br>
													</p>

													<script type="text/javascript">

													$("#social_thumb").click(function(){
														$(".social_box").toggle();
													});

													</script>


												</li>
												<li>
													<figure id="corporate_thumb">
														<img src="images/CorporateProgramme.JPG" alt="Garlic Catering"/>
														<figcaption><h3>Corporate </h3>

														</figcaption>
													</figure>
													<br>
													<p id="programe" style=" background-color: rgb(34, 15, 10); color: rgba(176, 16, 16, 0.71); display:none" class="corporate_box"><i class="fa fa-hand-o-right"></i>Annual General Meeting &nbsp (AGM/EGM)
														<br><br>
														<i class="fa fa-hand-o-right"></i>Conference / Meeting 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Dealer’s Meeting 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Official Celebration 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Official Meeting 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Seminar / Workshop 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Training Course 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Round Table Conference 
														<br><br>

													</p>

													<script type="text/javascript">

													$("#corporate_thumb").click(function(){
														$(".corporate_box").toggle();
													});

													</script>

												</li>

												<li>
													<figure id="cultural_thumb">
														<img src="images/CulturalEvent.JPG" alt="Garlic Catering"/>
														<figcaption><h3>Cultural </h3>
														</figcaption>
													</figure>
													<br>
													<p class="cultural_box" id="programe" style="  background-color: rgb(17, 35, 50);color: rgba(37, 169, 121, 0.81); display:none"><i class="fa fa-hand-o-right"></i>Exhibition 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Fashion Show 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Musical Show 
														<br><br>
														<i class="fa fa-hand-o-right"></i>Award Giving Ceremony  
														<br><br>
														<i class="fa fa-hand-o-right"></i>Signing Ceremony
														<br><br>
													</p>

													<script type="text/javascript">

													$("#cultural_thumb").click(function(){
														$(".cultural_box").toggle();
													});

													</script>

												</li>
											</div>
										</ul>
									</section>

								</div>

								<!-- // grid-gallery -->

							</div>
						</section>


						<!-- Why Choose Us-->
						<section class="aboutus" id="whychooseus">
							<div class="container">
								<div class="heading text-center">
									<h2 style="  background-color: white;opacity: 0.7;">Why Choose Garlic Catering</h2>
									<img class="dividerline" src="img/sep.png" alt="" style="opacity: 0.7">
									<em style="color:black">We Assure The Quality Food </em>

									<p style="  background-color: rgb(3, 3, 3);   color: aliceblue;
									">Looking for a catering to make your next big event a smashing SUCCESS
									...<br>
									You have found your catering team for all occasions !!!    
									<br>
									<br>

									We have been serving food successfully since 2004. We have our own experienced cook and skilled   volunteer to serve food. Our criteria is our own identity, these are –
									<br>
									<br>

									<div style="text-align: justify;  background-color: rgb(3, 3, 3);   color: aliceblue;
									">

									<i class="fa fa-hand-o-right"></i>
									We always analysis customer’s demand and according to their requirement we fulfill their need. 
									<br>

									<i class="fa fa-hand-o-right"></i>
									At every step of cooking we maintain hygienic food preparation and cleanness. 
									<br>
									<i class="fa fa-hand-o-right"></i>
									We have reputation about standardized food delivery and food serving in time.
								</div>
								<br>
								<div style="  background-color: rgb(3, 3, 3);   color: aliceblue;
								">
								<a href="#gallery" class="link" >Learn More </a> about us  or <a href="#contact" class="link"> Get in touch with us</a> right now !!
							</div>

						</p>
					</div>					
				</div>
			</section>



			<!-- food ingredients -->

			<section id="food_ingredients">

				<div class="container">							

					<div class="heading text-center">
						<h2 style="  background-color: white;opacity: 0.7;">Food Ingredients</h2>
						<img class="dividerline" src="img/sep.png" alt="Garlic Catering, Food Ingredients" style="opacity: 0.7;">
					</div>

				</div>

				<!-- photo grid 1 -->
				<div class="container">

					<div class="col-md-12">

						<div class="row">
							<div class="col-xs-6 col-md-3">
								<a href="#food_ingredients" class="">
									<img src="images/food1.jpg" alt="Garlic Catering Food">
								</a>
							</div>

							<div class="col-xs-6 col-md-3">
								<a href="#food_ingredients" class="">
									<img src="images/food4.jpg" alt="Garlic Catering Food">
								</a>
							</div>
							<div class="col-xs-6 col-md-3">
								<a href="#food_ingredients" class="">
									<img src="images/food6.jpg" alt="Garlic Catering Food">
								</a>
							</div>
							<div class="col-xs-6 col-md-3">
								<a href="#food_ingredients" class="">
									<img src="images/food11.jpg" alt="Garlic Catering Food">
								</a>
							</div>

						</div>
					</div>						

				</div>

				<div class="container">
					<br>

					<p style="text-align:-webkit-center; background-color: rgb(3, 3, 3);  color: aliceblue;
					">
					The heart of good food is its fresh and good ingredients. We always use excellent food ingredients.
					Standard food depends on its standard ingredients. 
					So we use excellent polao rice as like as kali zira, chini gura, bashmoti rice etc. <br>
					We also use efficient spices.
					These are cardamom, cinnamon, cloves, nutmeg, mace, saffron, coriander seeds cumin seeds, garlic, bay leaves, raisin etc. <br>
					We use branded ghee those are Arong ghee, Pran ghee, Milk Vita ghee.
					We use 100% rectified, standard and formalin-less vegetables, fish, meat and raw ingredients. <br><br>
					<em>"That’s why we are exception to others."</em>
				</p>
			</div>

			<div class="container">
				<br>


				<div class="col-md-offset-2 col-md-10">

					<div class="row">
						<div class="col-xs-6 col-md-5">
							<a href="#food_ingredients" class="">
								<img src="images/FoodIngredients.JPG" alt="Garlic Catering Food">
							</a>
						</div>


						<div class="col-xs-6 col-md-4">
							<a href="#food_ingredients" class="">
								<img src="images/food7.jpg" alt="Garlic Catering Food">
							</a>
						</div>



					</div>
				</div>						

			</div>
		</section>

		<!--feedback-->


		<section class="feedback" id="feedback">
			<div class="container">
				<div class="heading text-center">
					<h2 style="  background-color: white;
					opacity: 0.7;">Recent</h2>
					<img class="dividerline" src="img/sep.png" alt="Garlic Catering" style="opacity: 0.7;">
				</div>
				<br>

				<div class="col-md-9">
					<?php

					while($row = mysqli_fetch_assoc($result)) {

						?>
						<img src="admin/images/<?php echo $row['img_name'] ?>" alt="" width="80%" height="60%">
					</div>
					<div class="col-md-3" style="background-color: rgb(3, 3, 3);  color: aliceblue;
					">
					<h3 style="color: #AB2525;"><?php echo $row['title'] ?></h3>
					<em><?php echo $row['date_create'] ?></em>
					<p><?php echo $row['content'] ?></p>
					<?php  
				}
				?> 
			</div>
		</div>


	</section>


	<!--feedback-->


	<!-- social responsibility -->
	<section id="social_responsibility">
		<div class="container">
			<div class="heading">
				<img src="images/Pic-1.PNG" alt="Garlic Catering, Social Responsibility" style="background-color: rgb(36, 82, 122);">

				<br>
			</div>

			<p style="text-align: -webkit-center;background-color: rgb(3, 3, 3);  color: aliceblue;
			"  >

			We are conscious about social responsibility. So we always try to keep in touch with various social institutions, like mosque, Orphanage, child home and so on.
			<br>
			Every year we donate one part of our profit in this social institution with a view to social welfare activities. During special days we deliver free food to the poor.
		</p>

		<br>


	</div>

</section>

<!-- Our Team -->

<section class="ourteam" id="ourteam">

	<div class="conntainer">

		<div class="heading text-center">
			<h2 style="  background-color: white;
			opacity: 0.7;">Our Team</h2>
			<img class="dividerline" src="img/sep.png" alt="" style="opacity: 0.7;"> 

		</div>					

		<div class="row">
			<div class="col-md-3">
				<div class="papers text-center" style="width: 70%;">
					<img src="images/md_saidul_islam.jpg" alt="Garlic Catering Photo, Selina Begum" id="team_pic"><br/>
					<h4 class="notopmarg nobotmarg"> Md. Saidul Islam (Rakib)</h4>
					<em>Titleholder</em>
				</div>
			</div>
			<div class="col-md-3">
				<div class="papers text-center" style="width: 70%;">
					<img src="images/asif_hasnaine.jpg" alt="Garlic Catering Photo, Md .Saidul Islam" id="team_pic"><br/>
					<h4 class="notopmarg nobotmarg">Md. Asif Hasnine</h4>
					<em>Managing Partner</em>
				</div>
			</div>
			<div class="col-md-3">
				<div class="papers text-center" style="width: 70%;">
					<img src="images/mirza_md_rahat.jpg" alt="Garlic Catering ,Mirza Md Rahat" id="team_pic"><br/>

					<h4 class="notopmarg nobotmarg">Mirza Md. Rahat </h4>
					<em>General Manager</em>
				</div>
			</div>
			<div class="col-md-3">
				<div class="papers text-center" style="width: 70%;">
					<img src="images/salina_begum.jpg" alt="Garlic Catering Photo, Md .Saidul Islam" id="team_pic"><br/>

					<h4 class="notopmarg nobotmarg">Salina Begum</h4>
					<em>Asst. General Manager</em>

				</div>
			</div>
			
		</div>

		<div class="row">






			<div class="col-md-6" style="margin-top: 6%;  float: right;  padding-left: 17%;">

				<!-- facebook plugin -->
				<div class="fb-page" data-href="https://www.facebook.com/pages/Garlic-Catering/862027683838279?fref=ts" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Garlic-Catering/862027683838279?fref=ts"><a href="https://www.facebook.com/pages/Garlic-Catering/862027683838279?fref=ts">Garlic Catering</a></blockquote></div></div>
			</div>
		</div>
	</div>
</section>



<section class="contact" id="contact">
	<div class="container">
		<div class="heading">
			<h2 style='  background-color: white;opacity: 0.7;'>Contact Us
			</h2>
			<img class="dividerline" src="img/sep.png" alt="" style="opacity: 0.7;">

			<br>

			<br>


			<!-- ::::::::UNDER CONSTRUCTION:::::: -->

			<!-- GOOGLE MAPS -->

			<div class="col-md-9">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.7742633924927!2d90.42332092254215!3d23.779558042976245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c790c05989b9%3A0x76ab985d6fff1b0d!2sMiddle+Badda%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1429882007647" width="600" height="450" frameborder="0" style="border:0"></iframe>

			</div>

			<div class="col-md-3" style="background-color: rgb(3, 3, 3);  color: aliceblue;
			">
			<br><br>
			<h5>Address:</h5><span>Kha - 200/A, Hazi Salimullah Road, Middle Badda, Gulshan, Dhaka-1212</span>

			<br>
			<i class="fa fa-phone" style="font-size:x-large;"></i>
			<h5>Hot Line:</h5><span> +88 017988 58 9 58 </span>
			<br>
			<i class="fa fa-envelope-square" style="font-size:x-large;  color: rgb(27, 158, 59);"></i>
			<h5>Email:</h5><span>info@garliccateringbd.com</span>
			<br>
			<i class="fa fa-globe" style="font-size:x-large;  color: rgb(0, 0, 0);"></i>
			<h5>Web:</h5><a href="http://www.garliccateringbd.com/"><span>www.garliccateringbd.com</span></a>

		</div>

	</div>
</div>
</section>

<!--footer-->
<section class="footer" id="footer">
	<p class="text-center">
		<a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</p>
	<div class="container">
		<ul>

			<li><a href="https://www.facebook.com/pages/Garlic-Catering/862027683838279?fref=ts"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="#"><i class="fa fa-flickr"></i></a></li>
		</ul>
		<p>
			&copy; <?php echo date('Y'); ?> Copyright Garlic Catering<br>
			Designed and Developed by  <a href="https://www.facebook.com/abrar1661" style="color:black">Abrar Shariar</a><br>
			Courtesy by  <a href="" style="color:black">Fahad Billah</a>

		</p>
	</div>
</section>

</div><!--wrapper end-->

</body>

</html>

<!-- AJAX -->
<!-- ajax call to My Selected Menu -->

<script type="text/javascript">

$("#info").submit(function() {

	var info = $(this).serialize();

	$.post('ajax.php', info, function(data) {

		$("#output").html(data);

	});

	return false;
});

</script>

