<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Panel Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">	
	<style type="text/css">
	body{background-color: rgb(37, 15, 10);}
	html,body{
		position: relative;
		height: 100%;
	}

	.login-container{
		position: relative;
		width: 300px;
		margin: 80px auto;
		padding: 20px 40px 40px;
		text-align: center;
		background: #fff;
		border: 1px solid #ccc;
	}

	#output{
		position: absolute;
		width: 300px;
		top: -75px;
		left: 0;
		color: #fff;
	}

	#output.alert-success{
		background: rgb(25, 204, 25);
	}

	#output.alert-danger{
		background: rgb(228, 105, 105);
	}


	.login-container::before,.login-container::after{
		content: "";
		position: absolute;
		width: 100%;height: 100%;
		top: 3.5px;left: 0;
		background: #fff;
		z-index: -1;
		-webkit-transform: rotateZ(4deg);
		-moz-transform: rotateZ(4deg);
		-ms-transform: rotateZ(4deg);
		border: 1px solid #ccc;

	}

	.login-container::after{
		top: 5px;
		z-index: -2;
		-webkit-transform: rotateZ(-2deg);
		-moz-transform: rotateZ(-2deg);
		-ms-transform: rotateZ(-2deg);

	}

	.avatar{
		width: 100px;height: 100px;
		margin: 10px auto 30px;
		border-radius: 100%;
		border: 2px solid #aaa;
		background-size: cover;
	}

	.form-box input{
		width: 100%;
		padding: 10px;
		text-align: center;
		height:40px;
		border: 1px solid #ccc;;
		background: #fafafa;
		transition:0.2s ease-in-out;

	}

	.form-box input:focus{
		outline: 0;
		background: #eee;
	}

	.form-box input[type="text"]{
		border-radius: 5px 5px 0 0;
		text-transform: lowercase;
	}

	.form-box input[type="password"]{
		border-radius: 0 0 5px 5px;
		border-top: 0;
	}

	.form-box button.login{
		margin-top:15px;
		padding: 10px 20px;
	}

	.animated {
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
	}

	@-webkit-keyframes fadeInUp {
		0% {
			opacity: 0;
			-webkit-transform: translateY(20px);
			transform: translateY(20px);
		}

		100% {
			opacity: 1;
			-webkit-transform: translateY(0);
			transform: translateY(0);
		}
	}

	@keyframes fadeInUp {
		0% {
			opacity: 0;
			-webkit-transform: translateY(20px);
			-ms-transform: translateY(20px);
			transform: translateY(20px);
		}

		100% {
			opacity: 1;
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			transform: translateY(0);
		}
	}

	.fadeInUp {
		-webkit-animation-name: fadeInUp;
		animation-name: fadeInUp;
	}
	</style>

</head>
<body>
	<!-- login form -->
	<div class="container">
		<div class="login-container">
			<div id="output"></div>
			<h2>Garlic Catering Admin</h2>
			<p>Please Login to enter Admin Panel</p>
			<div class="form-box">
				<br>
				<!-- validation errors sent from controller -->
				<small style="color:red">
					<?php echo validation_errors(); ?>
				</small>
				<br>
				<form action="<?php echo base_url() ?>login/login_check" method="POST">
					<input name="username" type="text" placeholder="username" required>
					<input type="password" placeholder="password" name="password" required>
					<button class="btn btn-info btn-block login" type="submit">Login</button>
				</form>

			</div>
		</div>

	</div>
	<!-- JS for login form -->


	<script type="text/javascript">

// 	$(function(){
// 		var textfield = $("input[name=user]");
// 		$('button[type="submit"]').click(function(e) {
// 			e.preventDefault();
//                 //little validation just to check username
//                 if (textfield.val() != "") {
//                     //$("body").scrollTo("#output");
//                     $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
//                     $("#output").removeClass(' alert-danger');
//                     $("input").css({
//                     	"height":"0",
//                     	"padding":"0",
//                     	"margin":"0",
//                     	"opacity":"0"
//                     });

//                     //change button text 

//                     $('button[type="submit"]').html("continue")
//                     .removeClass("btn-info")
//                     .addClass("btn-default").click(function(){
//                     	$("input").css({
//                     		"height":"auto",
//                     		"padding":"10px",
//                     		"opacity":"1"
//                     	}).val("");
//                     });

//                     //show avatar

//                     $(".avatar").css({
//                     	"background-image": "url('http://api.randomuser.me/0.3.2/portraits/women/35.jpg')"
//                     });
//                 } else {

//                     //remove success message replaced with error message

//                     $("#output").removeClass(' alert alert-success');
//                     $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
//                 }
//                 //console.log(textfield.val());

//             });
// });
</script>

</body>

</html>

