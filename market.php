<?php
 	session_start();
	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Farmera</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
		
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<link rel="stylesheet" href="../css/bg.css" />
		
		</noscript>
		<style>
		
		</style>
	</head>
	<?php require 'menu.php'; ?>
	<body style="background-color: #C0EDA6;">
	<!--<div style="background-image: linear-gradient( 135deg, #92FFC0 10%, #002661 100%);">-->


		

			<section id="one" class="wrapper align-center" style="height: 600px">
				<div class="container">
					<h2 style="font-size:40px;font-family:'Original Surfer', cursive; color: #03045E; padding:0px;margin:10px;">Welcome to Digital Market </h2>
					<br /><br />
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<a href="profileView.php"><img src="2.png" height="90px" width="90px"></a>
							<p style="font-size:20px; color: red; font-weight:bold;padding:10px; ">Your Profile</p>
						</section>
						<section class="4u 12u$(small)">
							<a href="productMenu.php?n=1" name="catSearch"><img src="1.png" height="80px" width="80px"></a>
							<p style=" font-size:20px; color: red; font-weight:bold; padding:10px;"> Search according to your needs </p>
						</section>
						<section class="4u$ 12u$(small)">
							<a href="productmenu.php?n=0"><img src="3.png" height="80px" width="80px"></a>
							<p style="font-size:20px; color: red; font-weight:bold; padding:10px;">Our products</p>
						</section>
					</div>
				</div>
			</section>



		



</div>
	</body>
</html>
