<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Réservation d'hotels </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	
	

	
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">



	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<div id="colorlib-logo"><a href="index.php">MON AGENCE</a></div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul>
								<li class="active"><a href="Admin.php">Admin</a>
							</li>
						</ul>
							<p></p>
							<ul>
								
								<li ><a href="index.php">Hotels</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/blog-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Admin </h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

	<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					
					<?php
											$con=mysql_connect('localhost','root');
												$db=mysql_select_db('dbhotel');

											if(!$db)
											{
												$dbc="connection not working";
											}
											else
											{
												$dbc="connecton working";
											}
										
										
										?>

												<div>
												<div class="col-md-3" align="center">
													
												</div>
												
												<div class="col-md-3" align="center">
													<a href="ghotel.php"><h4><font color="red">  Gestion d'Hotels</font> </h4></a>
													</div>
													<div class="col-md-3" align="center">
													<a href="greservation.php"><h4><font color="red">  Gestion de reservation </font></h4></a>
													</div>
													<div class="col-md-3" align="center">
													</div>
												</div>

							</div>
							<br>
								
				<div class="row">
					
								<div class="col-md-3"> 
									<a href="greservation.php?action=listereser"><font color="#FF8800">Liste des reservations</font></a><br><br>
									<a href="greservation.php?action=listereser&action2=suppr"><font color="#FF8800">Annuler une  reservation</font></a><br><br>

								</div>
								<div class="col-md-9">
									
									<?php
									$action2=isset($_GET['action2']) ? $_GET['action2']:"";
									$action=isset($_GET['action']) ? $_GET['action']:"";
									$numreserv=isset($_GET['numreserv']) ? $_GET['numreserv']:"";
									
									if($action=='listereser' || $action=="")
										
										require("listereserv.php");
									if($action=='annulreserv')
									{
										require("suppreserv.php");
										require("listereserv.php");
						}
									?>
																		
								</div>
				</div>						
				
		<br>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://212618055191">+ 212 6 18 45 57 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="moncefelkhi@gmail.com">moncefelkhiyar@gmail.com</a> </p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="achrafhnaka@gmail.com">achrafhnaka@gmail.com</a> </p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">monsite.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		

<footer id="colorlib-footer" role="contentinfo" align="center">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3" align="center">
						
					</div>
					
					<div class="col-md-1" align="center">
						<ul class="colorlib-footer-links">
							<li><a href="index.php">Hotels</a></li>
						</ul>
						</div>
						<div class="col-md-1" align="center">
						<ul class="colorlib-footer-links">
							<li><a href="Admin.html">Admin</a></li>
						</ul>
						</div>
						<div class="col-md-2" align="center">
						<ul class="colorlib-footer-links">
							<li><a href="about.html">Qui sommes-nous ?</a></li>
						</ul>
						</div>
						<div class="col-md-1" align="center">
							<ul class="colorlib-footer-links">	
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-md-3" align="center">
						
						</div>
					</div>
			</div>
			<div class="row">
					<div class="col-md-11 ">
						
						<ul class="colorlib-footer-links">
							
							<li><a href="info@yoursite.com">moncefelkhiyar@gmail.com</a> , <a href="info@yoursite.com">achrafhnaka@gmail.com</a></li>
							<li><a href="#">monsite.com</a></li>
						</ul>
					</div>
	</div>
<div class="row">
	<div class="col-md-11">
					
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
								<li><a href="http://www.facebook.com/"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
</div>
</footer>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

		<!-- Bootstrap -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

