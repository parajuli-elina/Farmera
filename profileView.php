
<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		 <!-- [if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif] -->
	    <link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />

    </head> 


    <body style="background:url(agri.jpeg)">

        <?php
            require 'menu.php';
        ?>

        <!-- <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                    <span><img src="img_avatar.png"></span>
                    <br>
                    <h2 ><?php echo $_SESSION['Name'];?></h2>
                    <h4 style="color: black; font-size:30px">Username :<?php echo $_SESSION['Username'];?></h4>
                  
                    <h2 style="color:white;font-size:30px;font-family:Times New Roman">Your details</h2>
                </center> -->
                <!-- </header>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b  style="font-family:cursive"><font size="25px" color="black">RATINGS : </font></b>
                            <font size="15px"><?php echo $_SESSION['Rating'];?></font>
                        </div>
                        <div class="col-sm-3">
                            <b  style="font-family:cursive"><font size="25px" color="black">Email ID : </font></b>
                            <font size="15px"><?php echo $_SESSION['Email'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b style="font-family:cursive"><font size="25px" color="black" >Mobile No : </font></b>
                            <font size="15px"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <div class="col-sm-3">
                            <b  style="font-family:cursive"><font size="25px" color="black" >ADDRESS : </font></b>
                            <font size="15px"><?php echo $_SESSION['Addr'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br><br>
                        <div class="12u$">
                            <center>
                                <br><br>
                                <div class="row uniform">
                                    <div class="3u 12u$(xsmall)">
            							<a href="uploadProduct.php" class="btn btn-danger" style="text-decoration: none;">Upload Product</a>
            						</div>
                                    <div class="3u 12u$(large)">
                                        <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none;">LOG OUT</a>
                                    </div>
                                </div>

                              
                            <div class="button">
                                <a href="uploadProduct.php" ><button>Upload Products</a></button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        
<?php
$url = '/Applications/XAMPP/xamppfiles/htdocs/AgroCulture/agri.jpeg';
?>

<div class="main">
<div class="avatar">
<style>


.avatar{
    text-align: center;
    margin-top: 40px;
}
.avatar img{
    width: 200px;
    border-radius: 80px;

}
.btn{
background-color: rgb(203, 226, 180);
padding: 34px; 
margin-left: 320px;
font-size: 28px;
text-decoration:none;
cursor: pointer;
border-radius: 30px;

}
.btn a{
    text-decoration: none;
    color: black;
}
.btn1{
    margin-top: 20px;
    background-color: rgb(203, 226, 180);
    padding: 34px; 
    margin-left: 320px;
    font-size: 28px;
    text-decoration:none;
    cursor: pointer;
    border-radius: 30px;
    
    }
    .btn1 a{
        text-decoration: none;
        color: black;
    }
        </style>
        <img  src="img_avatar.png" alt="no img">
        </div>
        <center>
        <h2 ><?php echo $_SESSION['Name'];?></h2>
            <h4 style="color: black; font-size:30px">Username :<?php echo $_SESSION['Username'];?></h4>
            </center>
         <center>  
        <h2 style="color:black;font-size:30px;font-family:sans-serif">Your details</h2>
        </center> 
        <br><br>
    
                <center>
                  <!--  <p  style="font-family:inherit"><font size="20px" color="black">Rating : </font>
                    <font size="15px"><?php echo $_SESSION['Rating'];?></font>
                </p>-->

                    <p  style="font-family:inherit"><font size="20px" color="black">Email ID : </font>
                    <font size="15px"><?php echo $_SESSION['Email'];?></font>
                </p>
                <p>
                    <p style="font-family:inherit"><font size="20px" color="black" >Mobile No : </font>
                    <font size="15px"><?php echo $_SESSION['Mobile'];?></font>
                </p>
                <p>
                    <p  style="font-family:inherit"><font size="20px" color="black" >Address : </font>
                    <font size="15px"><?php echo $_SESSION['Addr'];?></font>
                </p>
                <br><br>
</center>

<div><a href="uploadProduct.php" ><button class="btn">Upload product </a> </button>

<a href="Login/logout.php" ><button class="btn1">LOG OUT</a> </button>
</div>




        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>


    </body>
</html>
