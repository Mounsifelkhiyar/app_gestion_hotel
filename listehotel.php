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
				                       $result=mysql_query('select N_HOTEL, NOM_HOTEL_,ADRESSE_HOTEL_,TEL_HOTEL_,NOM_VILLE,NBR_ETOILE,photo_hotel FROM hotel, ville WHERE hotel.ID_VILLE = ville.ID_VILLE');

												?>

					<div class="col-md-12">
				   		
						<!--<form method="get"  action="ghotel.php?action=listeHot">-->
								<table class="table table-bordered table table-striped "  >
										<caption>
  										<h3>La liste des Hotels disponibles </h3>
  											</caption>
  											<thead>
										<tr>
											<th align="center">Photo hotel</th>
											<th>Nom hotel </th>
											<th>Adresse</th>
											<th>Tel hotel </th>
											<th>ville</th>
											<th>Nombre d'etoiles</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
										while ($rs=mysql_fetch_array($result))
										{ ?>
										 <tr >

        										<td align="center"> <img src="images/<?php echo $rs['photo_hotel'];?>.jpg" height="20%" weight="60%"> </td>
       											<td><h4><?php echo htmlspecialchars($rs['NOM_HOTEL_']); ?> </h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['ADRESSE_HOTEL_']); ?> </h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['TEL_HOTEL_']); ?></h4></td>
       											<td><h4><?php echo htmlspecialchars($rs['NOM_VILLE']); ?></h4> </td>
       											<td></h4><?php echo htmlspecialchars($rs['NBR_ETOILE']); ?><font color="#FF8800"><i class="icon-star-full"></i></font></h4> </td>
       											<td>
       												 	
				                 				 <a href="ghotel.php?action=listeHot&opr=modhot&numhotel=<?php echo $rs['N_HOTEL'];?>"><img src="images/admod1.ico" width="30" height="20"></a>

				                 				 <a href="ghotel.php?action=listeHot&opr=suphot&numhotel=<?php echo $rs['N_HOTEL'];?>">  <img src="images/adsupp.jpg" width="30" height="20"> 

				                 				 	 </a>
				                					
				                				</td>
       										
      										</tr>
										<?php 	


									} ?>
									</tbody>
									</table>
										<!--</form>-->
									</div >
				
		
	
	
