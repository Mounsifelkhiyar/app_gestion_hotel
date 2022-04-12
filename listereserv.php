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
				                       $result=mysql_query('SELECT reservation.N_RESERVATION, NOMCLIENT, PRENOMCLIENT, client.ID_CLIENT, hotel.N_HOTEL, N_CHAMBRE, NOM_HOTEL_, DATE_DEBUT, DATE_FIN
											FROM reservation, client, hotel, chambre, concerne
												WHERE reservation.ID_CLIENT = client.ID_CLIENT
												AND chambre.N_HOTEL = hotel.N_HOTEL
												AND concerne.id_CHAMBRE = chambre.id_CHAMBRE
												AND concerne.N_RESERVATION = reservation.N_RESERVATION');
												?>

					<div class="col-md-12">
				   		
						<form method="get"  action="greservation.php?action=listereser">
								<table class="table table-bordered table table-striped "  >
										<caption>
  										<?php
											if($action2!='suppr')
											echo"<h3>La liste des reservations disponibles </h3>";
										?>
  											</caption>
  											<thead>
										<tr>
											
											<th>Numero reservation </th>
											<th>Nom client et prenom </th>
											<th>numero chambre reserver</th>
											<th>nom hotel reserver</th>
											<th>date debut </th>
											<th>date fin</th>
											<?php
											if($action2=='suppr')
											echo"<th>action </th>";
											?>
										</tr>
									</thead>
									<tbody>
										<?php 
										while ($rs=mysql_fetch_array($result))
										{ ?>
										 <tr >
       											<td><h4><?php echo htmlspecialchars($rs['N_RESERVATION']); ?> </h4></td>
       											<td><h4> <?php echo htmlspecialchars($rs['NOMCLIENT']); echo"  "; echo htmlspecialchars($rs['PRENOMCLIENT']);?> </h4></td> 
       											
       											<td><h4> <?php echo htmlspecialchars($rs['N_CHAMBRE']); ?> </h4></td> 
       											<td><h4> <?php echo htmlspecialchars($rs['NOM_HOTEL_']); ?> </h4></td> 
       											<td><h4><?php echo htmlspecialchars($rs['DATE_DEBUT']); ?></h4> </td>
       											<td></h4><?php echo htmlspecialchars($rs['DATE_FIN']); ?></h4> </td>

       											<?php
       												if($action2=='suppr')
       												{
       													?>
       													<td>
       												 	
				                 				 
       												
       													
				                 				 <a href="greservation.php?action=annulreserv&numreserv=<?php echo $rs['N_RESERVATION'];?>">  <img src="images/adsupp.jpg" width="30" height="20">
				                 				 	


				                 							 <input type="hidden" name="nom_" value="<?php echo htmlspecialchars($_POST['NOMCLIENT']);?>"> 
				                 							  <input type="hidden" name="prenom_" value="<?php echo htmlspecialchars($_POST['PRENOMCLIENT']);?>">
				                 							  <input type="hidden" name="idclient_" value="<?php echo htmlspecialchars($_POST['ID_CLIENT']);?>">
				                 							  <input type="hidden" name="nomhotel" value="<?php echo htmlspecialchars($rs['NOM_HOTEL_']);?>"> 
				                 							   <input type="hidden" name="typechambre" value="<?php echo htmlspecialchars($_POST['chambre_type']);?>"> 
				                 							   <input type="hidden" name="numchambre" value="<?php echo htmlspecialchars($rs['N_CHAMBRE']);?>"> 


				                 				 	 </a>
				                					
				                				</td><?php
				                 				  	}
				                 				 ?>
       										
      										</tr>
										<?php 	


									} ?>
									</tbody>
									</table>
										</form>
									</div >
				