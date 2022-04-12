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
							<div id="colorlib-logo"><a href="index.php">MON AGENCE </a></div>
						</div>
						<div class="col-xs-8 text-right menu-1">
							<ul><li><a href="Admin.php">Admin</a>
							</li>
						</ul>
							<p></p>
							<ul>
								
								
								<li ><a href="index.php">Hotels</a></li>
								<li ><a href="about.html">About</a></li>
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
			   	<li style="background-image: url(images/reservation2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>reservation </h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
									<?php
											mysql_connect('localhost','root');
												mysql_select_db('dbhotel');
if(isset($_POST['valider']))
{

										if($_POST['nom_client']!='' || $_POST['prenom_client']!='' || $_POST['email_client'])
										{
											
										mysql_query('INSERT INTO client(NOMCLIENT, PRENOMCLIENT, ADDRESSCLIENT,TELCLIENT,EMAILCLIENT) VALUES ("'.$_POST['nom_client'].'","'.$_POST['prenom_client'].'","'.$_POST['adresse_client'].'","'.$_POST['telephone_client'].'","'.$_POST['email_client'].'")') or die(mysql_error());
										$maxclient=mysql_fetch_array(mysql_query('SELECT MAX(ID_CLIENT) FROM  client')); 

										mysql_query('INSERT INTO reservation(ID_CLIENT, DATE_DEBUT,DATE_FIN) VALUES ("'.$maxclient[0].'","'.$_POST['date_debut'].'","'.$_POST['date_fin'].'")') or die(mysql_error());
										$maxreserv=mysql_fetch_array(mysql_query('SELECT MAX(N_RESERVATION) FROM  reservation')); 

										$nmchambre=mysql_fetch_array(mysql_query('SELECT  MIN(id_CHAMBRE)
												FROM  chambre 
												WHERE  N_HOTEL ="'.$_POST['num_hotel'].'"
													AND  ID_CATEGORIE ="'.$_POST['type_chambre'].'"
														AND  id_CHAMBRE NOT 
															IN (

														SELECT  id_CHAMBRE 
											FROM  concerne WHERE  N_RESERVATION IN (

												SELECT  N_RESERVATION 
													FROM  reservation
												WHERE  DATE_DEBUT >=  "'.$_POST['date_debut'].'"
												AND  DATE_FIN <=  "'.$_POST['date_fin'].'"
																)
																			)')) or die(mysql_error());

												mysql_query('INSERT INTO concerne(N_RESERVATION, id_CHAMBRE) VALUES ("'.$maxreserv[0].'","'.$nmchambre[0].'")') or die(mysql_error());
												?>	


										<div id="colorlib-contact">
											<div class="container">
											<div class="row">
												<div class="col-md-8  animate-box">
												<h2> Votre reservation à été bien enregistrée  sous le numéro: <?php echo  $maxreserv[0];?></h2>";
											</div>
											</div>
										</div>
									</div>
 
									<?php	}
										else
										{

											echo" <h1> saisir les informations de client <h1>";
										}

									}
									else
									{


		if(isset($_POST['date_']) && isset($_POST['date2_'])&& isset($_POST['nomhotel']) && isset($_POST['typechambre']))
		{?>	
										
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-1 animate-box">
						<h3>Informations de la reservation selectionnée</h3>
						<form method="post"  action="reservation.php">
							<div class="row form-group">
								
								<div class="col-md-12">
									<label >Date debut :</label>
									<input type="text" name="date_debut" class="form-control" placeholder="date debut" value="<?php echo $_POST['date_']; ?>" readonly="readonly">
								</div>
								<div class="col-md-12">
									<label >Date fin :</label>
									<input type="text" name="date_fin" class="form-control" placeholder="date fin" value="<?php echo $_POST['date2_'];?>" readonly="readonly">
								</div>
								<div class="col-md-12">
									<label >Nom hotel :</label>
									<input type="text" name="nom_hotel" class="form-control" placeholder="nom hotel" value="<?php echo htmlspecialchars($_POST['nomhotel']);?>" readonly="readonly">
								</div>
								<div class="col-md-12">
									<label >Type chambre :</label>
									<input type="text" name="type_chambre_" class="form-control" placeholder="type chambre" value="<?php if($_POST['typechambre']==1) echo "simple"; elseif($_POST['typechambre']==2)  echo "double"; else  echo "triple" ;?>" readonly="readonly">
								</div>
								<input type="hidden" name="num_hotel" value="<?php echo $_POST['numhotel'];?>"> 
								<input type="hidden" name="type_chambre" value="<?php echo htmlspecialchars($_POST['typechambre']);?>"> 


							</div>
						

						
					</div>

					<div class="col-md-5 animate-box">
						<h3>Informations de client</h3>



					
							<div class="row form-group">
								<div class="col-md-12">
									<label >Nom :</label>
									<input type="text" name="nom_client" class="form-control" placeholder=" nom">
								</div>
								<div class="col-md-12">
									<label >Prénom :</label>
									<input type="text" name="prenom_client" class="form-control" placeholder=" Prénom">
								</div>
								<div class="col-md-12">
									<label >Adresse :</label>
									<input type="text" name="adresse_client" class="form-control" placeholder=" Adresse">
								</div>
								<div class="col-md-12">
									<label >Téléphone:</label>
									<input type="text" name="telephone_client" class="form-control" placeholder=" Téléphone">
								</div>
								<div class="col-md-12">
									<label >Email :</label>
									<input type="text" name="email_client" class="form-control" placeholder=" Email">
								</div>
								
							</div>
							<div class="form-group text-center">
								<input type="submit" name="valider" value="Valider" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
	<?php 
	} }?>	

	</div>

				
		
	<footer id="colorlib-footer" role="contentinfo" align="center">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 align="center">
						
					</div>
					
					<div class="col-md-1 align="center">
						<ul class="colorlib-footer-links">
							<li><a href="index.php">Hotels</a></li>
						</ul>
						</div>
						<div class="col-md-1 align="center">
						<ul class="colorlib-footer-links">
							<li><a href="Admin.php">Admin</a></li>
						</ul>
						</div>
						<div class="col-md-2 align="center">
						<ul class="colorlib-footer-links">
							<li><a href="about.html">Qui sommes-nous ?</a></li>
						</ul>
						</div>
						<div class="col-md-1 align="center">
							<ul class="colorlib-footer-links">	
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-md-3 align="center">
						
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

<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
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

