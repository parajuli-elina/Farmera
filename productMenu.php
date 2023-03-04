<?php
	session_start();
	require 'db.php';
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class>

		<?php
			require 'menu.php';
			function dataFilter($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>

		<!-- One -->
			<section id="main" class="wrapper style1 align-center" style="background-image:url('images/banner1.jpg');" >
				<div class="container">
						<h2 style="color:white;font-style:bold;font-size:60px;font-family:Times New Roman;">Welcome to digital market</h2>

				<?php
					if(isset($_GET['n']) AND $_GET['n'] == 1):
				?>
					<h2 style="font-style:bold;font-family:Times New Roman;font-size:35px;">Select Filter</h2>
					<form method="GET" action="productMenu.php?">
						<input type="text" value="1" name="n" style="display: none;"/>
						<center>
							<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<div class="select-wrapper" style="width: auto" >
									<select name="type" id="type" required style="background-color:white;color: black;font-size:20px;">
										<option value="all" style="color: black;">List All</option>
										<option value="fruit" style="color: black;">Fruit</option>
										<option value="vegetable" style="color: black;">Vegetable</option>
										<option value="grain" style="color: black;">Grains</option>
									</select>
							  	</div>
							</div>
							<div class="col-sm-2">
								<input class="button special" type="submit" value="Go!" style="color:white;border:0.3px ridge red;background-color: #ff6600;font-size:20px;" />
							</div>
							<div class="col-sm-4"></div>
						</div>
						</center>
					</form>
				<?php endif; ?>

				<section id="two" class="wrapper style2 align-center">
				<div class="container">
				<?php
					if(!isset($_GET['type']) OR $_GET['type'] == "all")
					{
					 	$sql = "SELECT * FROM fproduct WHERE 1";
					}
				    if(isset($_GET['type']) AND $_GET['type'] == "fruit")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "grain")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
					}
					$result = mysqli_query($conn, $sql);

					?>
					<div class="row">
					<?php

						while($row = $result->fetch_array()):
							$picDestination = "images/productImages/".$row['pimage'];
						?>
							<div class="col-md-4">
							<section>
							<strong>
							<br>
						<h2 class="title" style="color:white;font-size:25px;font-family:Times New Roman;border:0.3px solid grey;background-image:linear-gradient(90deg,rgba(200, 80, 230, 0.89),rgba(89, 154, 214, 0.829));padding-top:10px;padding-left:110px;border-radius:5%;text-align:justify; " onMouseOver="this.style.backgroundColor='black';this.style.cursor='pointer';this.style.cursor='pointer'" onMouseOut="this.style.backgroundColor='white';this.style.cursor='pointer'">
							
							<?php echo $row['product'].'';?><br>
						    <?php echo "Type : ".$row['pcat'].'';?><br>
							<?php echo "Price : ".$row['price'].' /-';?>
						</h2></strong>
							<a href="review.php?pid=<?php echo $row['pid'] ;?>" > <img style="border-radius:5%;border-color:white;border-style:solid;border-width:9px;" class="image fit" src="<?php echo $picDestination;?>" height="220px;"  /></a>
							<div style="align: left;font-size:45px;font-family:Times New Roman;border:0.3px ridge grey;background-image:linear-gradient(90deg,rgba(200, 80, 230),rgba(89, 154, 214));padding-top:10px;border-radius:5%;height:110px;">
							 <blockquote style="font-style:bold;font-size:30px;padding-top:20px;padding-right:30px;text-decoration:none;">
							 <a  style="text-decoration:none;color:white;"  onMouseOver="this.style.cursor='pointer';this.style.color='black'" onMouseOut="this.style.cursor='pointer';this.style.color='white'" href="review.php?pid=<?php echo $row['pid'] ;?>" > 
							 Buy Now
						     </a>
							 <br></blockquote>

						</section>
						</div>

						<?php endwhile;	?>


					</div>

			</section>
					</header>

			</section>

	</body>
</html>
