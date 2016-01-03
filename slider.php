/*
This file containes the code for the infinite scroll slider displayed at the top of the webpage
*/
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="garlic";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<title>Fullscreen Background Image Slideshow with CSS3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Garlic Catering Dhaka-Bangladesh | Catering Business" />
<meta name="keywords" content="catering, Catering business, catering business Dhaka Bangladesh, Garlic Catering Bangladesh" />
<meta name="author" content="Garlic Catering" />
<link rel="shortcut icon" href="../favicon.ico"> 
<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" />
-->
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

<style type="text/css">

/*Slider's CSS starts*/

<?php
// Slider 01
$sql_slide01="SELECT * FROM slider ORDER BY id DESC LIMIT 1";
$result_slide01 = mysqli_query($conn, $sql_slide01);
while($slide = mysqli_fetch_assoc($result_slide01)) {
    ?>
    .cb-slideshow li:nth-child(1) span { background-image: url(admin/images/<?php echo $slide['img_name'] ?>);}
    <?php
}
?>

<?php
// Slider 02
$sql_slide02="SELECT * FROM slider ORDER BY id DESC LIMIT 1,1";
$result_slide02 = mysqli_query($conn, $sql_slide02);
while($slide = mysqli_fetch_assoc($result_slide02)) {
    ?>
    .cb-slideshow li:nth-child(2) span {
        background-image: url(admin/images/<?php echo $slide['img_name'] ?>);
        -webkit-animation-delay: 6s;
        -moz-animation-delay: 6s;
        -o-animation-delay: 6s;
        -ms-animation-delay: 6s;
        animation-delay: 6s;
    }
    <?php
}
?>



<?php
// Slider 03
$sql_slide03="SELECT * FROM slider ORDER BY id DESC LIMIT 2,1";
$result_slide03 = mysqli_query($conn, $sql_slide03);
while($slide = mysqli_fetch_assoc($result_slide03)) {
    ?>
    .cb-slideshow li:nth-child(3) span {
        background-image: url(admin/images/<?php echo $slide['img_name'] ?>);
        -webkit-animation-delay: 12s;
        -moz-animation-delay: 12s;
        -o-animation-delay: 12s;
        -ms-animation-delay: 12s;
        animation-delay: 12s;
    }
}
<?php
}
?>



<?php
// Slider 04
$sql_slide04="SELECT * FROM slider ORDER BY id DESC LIMIT 2,2";
$result_slide04 = mysqli_query($conn, $sql_slide04);
while($slide = mysqli_fetch_assoc($result_slide04)) {
    ?>
    .cb-slideshow li:nth-child(4) span {
        background-image: url(admin/images/<?php echo $slide['img_name'] ?>);
        -webkit-animation-delay: 18s;
        -moz-animation-delay: 18s;
        -o-animation-delay: 18s;
        -ms-animation-delay: 18s;
        animation-delay: 18s;
    }
    <?php
}
?>


<?php
// Slider 05
$sql_slide05="SELECT * FROM slider ORDER BY id DESC LIMIT 2,3";
$result_slide05 = mysqli_query($conn, $sql_slide05);
while($slide = mysqli_fetch_assoc($result_slide05)) {
    ?>
    .cb-slideshow li:nth-child(5) span {
        background-image: url(admin/images/<?php echo $slide['img_name'] ?>);
        -webkit-animation-delay: 24s;
        -moz-animation-delay: 24s;
        -o-animation-delay: 24s;
        -ms-animation-delay: 24s;
        animation-delay: 24s;
    }
    <?php
}
?>



<?php
// Slider 06
$sql_slide06="SELECT * FROM slider ORDER BY id DESC LIMIT 2,4";
$result_slide06 = mysqli_query($conn, $sql_slide06);
while($slide = mysqli_fetch_assoc($result_slide06)) {
    ?>

    .cb-slideshow li:nth-child(6) span {
        background-image: url(admin/images/<?php echo $slide['img_name'] ?>);
        -webkit-animation-delay: 30s;
        -moz-animation-delay: 30s;
        -o-animation-delay: 30s;
        -ms-animation-delay: 30s;
        animation-delay: 30s;
    }

    <?php
}
?>

/*Slider's CSS ends*/


#page{
    margin-left: 5%;
    margin-left: 5%;
    margin-top: 5%;

}
#silde{
}
#slide ul{
    list-style-type: none;
}
.cb-slideshow li span {
    height: 80%;
}
</style>
<div id="slide" >
    <ul class="cb-slideshow">
        <li><span>Image 01</span></li>
        <li><span>Image 02</span></li>
        <li><span>Image 03</span></li>
        <li><span>Image 04</span></li>
        <li><span>Image 05</span></li>
        <li><span>Image 06</span></li>
    </ul>
</div>
<br><br>

