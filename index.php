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
		<?php	$d=date("Y-m-d"); 
                    $dmax=strtotime("+3 months",strtotime($d));
                    $dmax=date("Y-m-d",$dmax) ;
              ?>
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
								
								<li class="active"><a href="index.php">Hotels</a></li>
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
			   	<li style="background-image: url(images/hotel-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Trouvez un hotel </h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/hotel-3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Trouvez un hotel </h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
						</div>

						<div class="tab-content">
							    
				         <div id="hotel" class="tab-pane fade in active">
						      <form method="post" class="colorlib-form" action="index.php">
				              	<div class="row">
				              		
				              	 <div class="col-md-4">
				              	 <div class="form-group">
				                    <label for="date">Ville:</label>
				                    <div class="form-field" >
				                      <input type="text" name="location" class="form-control" placeholder="Lieu de recherche" class="form-control" >
				                    </div>
				                  </div>	
				              	 </div>
				              	
				              	<!--
				              	<div class="col-md-4">
				                    <label >Ville:</label>
				                  <?php
				                       $r=mysql_query('SELECT ID_VILLE,NOM_VILLE FROM ville');
				                     ?>
				                      <select name="location" class="form-control">
				                     

				                       <?php
				                       while ($rs=mysql_fetch_array($r))

				                       {


				                       	?>

				                        <option value="<?php echo htmlspecialchars($rs['ID_VILLE']);?>" ><?php echo htmlspecialchars($rs['NOM_VILLE']);?></option>
				                        <?php
										}
										?>
				                     
				                      </select>
				                    
				                 </div>
				                 -->
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Date d'entree:</label>
				                   
				                    
				                      <input type="date" name="date_depart"  min="<?php echo $d; ?>"  value="<?php echo $d; ?>" max="<?php echo $dmax; ?>" class="form-control">
				                   
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">date de sortie:</label>
				                    
				                     
				                      <input type="date" name="date_fin"  min="<?php echo $d; ?>"  value="<?php echo $d; ?>" max="<?php echo $dmax; ?>" class="form-control">
				              
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label >Chambres</label>
				                  
				                     
				                      <select name="chambre_type" class="form-control" >
				                        <option value="1"  >simple</option>
				                        <option value="2">double</option>
				                        <option value="3">triple</option>
				                     
				                      </select>
				                    
				                 </div>
				                </div>
				                  
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="RECHERCHE Hotel" class="btn btn-primary btn-block">
				                </div>

				                

				              </div>
				            </form>
						   </div>
			         </div>
					</div>
				</div>
			</div>
		</div>




<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-11">
						<div class="row">
							<div class="wrap-division">
								<div class="row">
				   			<div class="col-md-12 col-md-offset-1 col-sm-12 col-xs-12 slider-text">
				   				
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
									

										<?php
										if(isset($_POST['location']))
										{
											
											$result=mysql_query('select N_HOTEL, NOM_HOTEL_,ADRESSE_HOTEL_,TEL_HOTEL_,NOM_VILLE,NBR_ETOILE,photo_hotel FROM hotel, ville WHERE N_HOTEL in (SELECT N_HOTEL 
													FROM  chambre 
													WHERE  N_CHAMBRE NOT IN ( SELECT  N_CHAMBRE 
												FROM  concerne WHERE  N_RESERVATION IN (SELECT  N_RESERVATION FROM  reservation 
												WHERE  DATE_DEBUT >="'.$_POST['date_depart'].'"
												AND  DATE_FIN <="'.$_POST['date_fin'].'")
												)AND  ID_CATEGORIE ="'.$_POST['chambre_type'].'"
												) AND  hotel.ID_VILLE = ville.ID_VILLE 
													AND  NOM_VILLE = "'.$_POST['location'].'"');
												?>						
										 <table class="table table-bordered table table-striped "  >
										<caption>
  										<h2>Resultats trouvés </h2>
  											</caption>
  											<thead>
										<tr>
											<th align="center">Photo hotel</th>
											<th>Nom hotel </th>
											<th>Adresse</th>
											<th>Tel hotel </th>
											<th>ville</th>
											<th>Nombre d'etoiles</th>
											<th> Reserver</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										while ($rs=mysql_fetch_array($result))
										{ ?>
										 <tr >

        										<td align="center"> <img src="images/<?php echo $rs['photo_hotel'];?>.jpg" height="40%" weight="60%"> </td>
       											<td><h4><?php echo htmlspecialchars($rs['NOM_HOTEL_']); ?> </h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['ADRESSE_HOTEL_']); ?> </h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['TEL_HOTEL_']); ?></h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['NOM_VILLE']); ?></h4> </td>
       											<td></h4><?php echo htmlspecialchars($rs['NBR_ETOILE']); ?><font color="#FF8800"><i class="icon-star-full"></i></font></h4> </td>
       											<td>
       												 <form method="post" class="colorlib-form" action="reservation.php">
       												 	
				                 							 <input type="submit" name="submit" id="submit" value="Réserver" class="btn btn-primary btn-block">
				                 							 <input type="hidden" name="date_" value="<?php echo htmlspecialchars($_POST['date_depart']);?>"> 
				                 							  <input type="hidden" name="date2_" value="<?php echo htmlspecialchars($_POST['date_fin']);?>"> 
				                 							  <input type="hidden" name="nomhotel" value="<?php echo htmlspecialchars($rs['NOM_HOTEL_']);?>"> 
				                 							   <input type="hidden" name="typechambre" value="<?php echo htmlspecialchars($_POST['chambre_type']);?>"> 
				                 							   <input type="hidden" name="numhotel" value="<?php echo htmlspecialchars($rs['N_HOTEL']);?>"> 
				                						
				                					</form>
				                				</td>
      										</tr>
      										<?php
      										 }?>
								</tbody>

									</table>
      									<?php
      							}
										
      							else
      								{
										
										
									
											
											$result=mysql_query('select N_HOTEL, NOM_HOTEL_,ADRESSE_HOTEL_,TEL_HOTEL_,NOM_VILLE,NBR_ETOILE,photo_hotel FROM hotel, ville WHERE hotel.ID_VILLE = ville.ID_VILLE');
												?>						
										 <table class="table table-bordered table table-striped "  >
										<caption>
  										<h2>Découvrez les hôtels les plus recherchés par les voyageurs. </h2>
  											</caption>
  											<thead>
										<tr>
											<th align="center">Photo hotel</th>
											<th>Nom hotel </th>
											<th>Adresse</th>
											<th>Tel hotel </th>
											<th>ville</th>
											<th>Nombre d'etoiles</th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
										while ($rs=mysql_fetch_array($result))
										{ ?>
										 <tr >

        										<td align="center"> <img src="images/<?php echo $rs['photo_hotel'];?>.jpg" height="40%" weight="100%"> </td>
       											<td><h4><?php echo htmlspecialchars($rs['NOM_HOTEL_']); ?> </h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['ADRESSE_HOTEL_']); ?> </h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['TEL_HOTEL_']); ?></h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['NOM_VILLE']); ?></h4> </td>
       											<td></h4><?php echo htmlspecialchars($rs['NBR_ETOILE']); ?><font color="#FF8800"><i class="icon-star-full"></i></font></h4> </td>
       										
      										</tr>
										<?php 	} ?>
									</tbody>
									</table>
								<?php 	
				   			
				   		}
				   		?>
				   	</div >
				   			</div >
				   		</div>
				   	</div>
				   </div>
				</div>
			</div>
		</div>
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

