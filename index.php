<?php session_start(); ?>

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
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
         
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexFooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
			<section class="wrapper">
			<video autoplay muted loop id="myVideo">
           <source src="images/video1.mp4" type="video/mp4">
           <img src="images/banner1.jpg">
          </video>
				<div class="container">
				<center><img class="container" style="height:55%;width:65%" src="farmera.png"></center>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto;background-color: #ff6600;">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto;background-color: #ff6600;">REGISTER</button>
						</div>
					</div>
				</center>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center" style="background-image:linear-gradient(90deg,rgba(200, 80, 230, 0.89),rgba(89, 154, 214, 0.829));">
				<div class="container">
					<header>
						<b style="color:white;"><p style="font-size:60px;font-family:Gadugi;paddin:0px;margin:40px;">Farmera</p></b>
						<p  style="font-size:30px;font-family:Goudy Old Style;paddin:0px;margin:1px;">Explore the new way of trading...</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>Digital Market</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>Agro-Blog</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>Register with us</p>
						</section>
					</div>
				</div>
			</section>


		<!-- Footer -->
		<footer class="footer-distributed" style="background-image:linear-gradient(90deg,rgba(81, 31, 93, 0.89),rgba(35, 67, 97, 0.829));" id="aboutUs">
		<center>
			<h1 style="font: 45px calibri; color:white;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;padding-left:10px;">Farmera &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white;padding-left:10px;">Your product Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker" style="color:#0f0933;background-color:#53b9fc;"></i>
				<p style="font-size:20px">Vellore Institue Of Technology, VIT, Vellore<span>Pin Code: 632014</span></p>
			</div>
			<div>
				<i class="fa fa-phone" style="color:#0f0933;background-color:#53b9fc;"></i>
				<p style="font-size:20px">8800000000</p>
			</div>
			<div>
				<i class="fa fa-envelope" style="color:#0f0933;background-color:#53b9fc;"></i>
				<p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">farmera@gmail.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:30px;padding-left:4px;"><b style="color:white;font-family:Gadugi;">Farmera</b> </span>
			<p style="padding-left:4px;color:white;">	Farmera is an e-commerce trading platform for grains & grocerries...</p>
			</p>
			<div class="footer-icons">
				<a href="#"><i  class="fa fa-facebook"></i></a>
				<a href="#"><i  class="fa fa-youtube"></i></a>
				<a href="#"><i  class="fa fa-twitter"></i></a>
			</div>
		</div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     </script>
      <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
      <script src="main.js"></script>


	</footer>


			<div id="id01" class="modal">

  <form class="animate" style="  background-image: linear-gradient(270deg,#00b386,#009999); margin: 5% auto 15% auto;  border: 1px solid rgb(97, 97, 97);width: 50%;border-radius:7%;" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container" >
    <h2><b style="color:white;">Login</b></h2>
							<form method="post" action="Login/login.php" >
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%;font-size:25px;background-color:white;border-radius:7%;" required/>
									</div>
									<div class="7u$">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%;font-size:25px;background-color:white;border-radius:7%;" required/>
									</div>
								</div>
									<div class="row uniform">
										<p>
				                            <b style="font-size:25px;color:white;">Click : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" style="background-color:white;"id="farmer" name="category" value="1" >
				                            <label for="farmer"><b style="font-size:25px;color:white;">Farmer</b></label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" style="background-color:white;" id="buyer" name="category" value="0" checked>
				                            <label for="buyer"><b style="font-size:25px;color:white;">Buyer</b></label>
				                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit"style="font-size:25px;border-radius:5%;background-color: #ff6600;border-radius:7%;"value="Login" />
										</div>
									</div>
									</center>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>


<div id="id02" class="modal">

  <form class="animate" style="  background-image: linear-gradient(270deg,#00b386,#009999); margin: 5% auto 15% auto;  border: 1px solid rgb(97, 97, 97);width: 50%;border-radius:7%;" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

<section  >
							<h2><b style="color:white;">SignUp</b></h2>
							<form method="post" action="Login/signUp.php" >
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name"  style="font-size:25px;border-radius:5%;background-color:white;" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName"  style="font-size:25px;border-radius:5%;background-color:white;" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number"  style="font-size:25px;border-radius:5%;background-color:white;" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email"  style="font-size:25px;border-radius:5%;background-color:white;" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password"  style="font-size:25px;border-radius:5%;background-color:white;" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" style="font-size:25px;border-radius:5%;background-color:white;" required/>
			                        </div>
								</div>
								<div class="row uniform"  style="font-size:25px;">
									<div class="6u 12u$(xsmall)"  style="font-size:25px;border-radius:5%;">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:100%;font-size:25px;border-radius:5%;background-color:white;" required/>
									</div>
								</div>
								<div class="row uniform">
										<p>
										<b style="font-size:25px;color:white;">Click: </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmerl" name="category" value="1">
				                            <label for="farmerl"><b style="font-size:25px;color:white;">Farmer</b></label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyerl" name="category" value="0">
				                            <label for="buyerl"><b style="font-size:25px;color:white;">Buyer</b></label>
				                        </div>
									</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit"style="font-size:25px;border-radius:5%;margin-bottom:20px;color:white;background-color: #ff6600;" class="special" /></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset" style="font-size:25px;border-radius:5%;margin-left:30%;margin-bottom:20px;color:white;background-color: #ff6600;"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


	</body>
</html>
