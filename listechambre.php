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
				              /** $result=mysql_query('SELECT  N_CHAMBRE ,  NOM_HOTEL_ ,  ID_CATEGORIE ,  TEL_CHAMBRE FROM chambre');**/

								
										
								
								?>
					<div class="col-md-11">
				   		<form method="POST" action="ghotel.php?action=listeChmbre">

								<table class="table table-bordered table-striped "  >
										<caption>
  										<h3>La liste des chambres par Hotel  </h3>
  											</caption>
  											<thead>
  											<tr>
											<th colspan="6">Hotel: 
				                   
				                  <?php
				                       $rr1=mysql_query('SELECT N_HOTEL,NOM_HOTEL_ FROM hotel ');
				                     ?>
				                      <select name="_hotel">
				                     
				                      	<option value="" >choisir l'hotel</option>
				                       <?php
				                       while ($rss=mysql_fetch_array($rr1))

				                       {
				                       	?>

				                        <option value="<?php echo htmlspecialchars($rss['N_HOTEL']);?>" ><?php echo htmlspecialchars($rss['NOM_HOTEL_']);?></option>
				                        <?php
										}
										?>
				                     
				                      </select>
				                      <div class="col-md-4"> </div>

										<input type="submit" name="selectioner Hotel" value="affiche" class="btn btn-primary">
				                    
				                  </th>
											
										</tr>
										<tr>
											<th>Numero chambre </th>
											<th>Nom hotel</th>
											<th>Catégorie </th>
											<th>Téléphone</th>
											<th>Etat de reservation</th>

											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										 $result=mysql_query('SELECT id_CHAMBRE,N_CHAMBRE,NOM_HOTEL_ ,ID_CATEGORIE, TEL_CHAMBRE  
										FROM  chambre,hotel WHERE chambre.N_HOTEL=hotel.N_HOTEL AND chambre.N_HOTEL="'.$_POST['_hotel'].'"');	
										
										while ($rs=mysql_fetch_array($result))
										{ ?>
										 <tr>
       											<td><h4><?php echo htmlspecialchars($rs['N_CHAMBRE']); ?> </h4></td>

       											<td><h4><?php echo htmlspecialchars($rs['NOM_HOTEL_']); ?> </h4></td>
       											<td><h4><?php if($rs['ID_CATEGORIE']==1) echo "simple"; elseif($rs['ID_CATEGORIE']==2)  echo "double"; else  echo "triple" ;?></h4> </td>
       											<td></h4><?php echo htmlspecialchars($rs['TEL_CHAMBRE']); ?></h4></td>

       											<td></h4><?php 
       											$resRS=mysql_query('SELECT DISTINCT  id_CHAMBRE FROM concerne where id_CHAMBRE="'.$rs['N_CHAMBRE'].'"');
       												$rsR=mysql_fetch_array($resRS);
       												if($rsR) echo "reservé"; else  echo "non reservé" ;
       												 ?>


       												</h4></td>
       											<td>
       												 	
				                 				 <a href="ghotel.php?action=listeChmbre&opr2=modcham&numcham=<?php echo $rs['id_CHAMBRE'];?>"><img src="images/admod1.ico" width="30" height="20">

				                 				 <a href="ghotel.php?action=listeChmbre&opr2=suppcham&numcham=<?php echo htmlspecialchars($rs['id_CHAMBRE']);?>"><img src="images/adsupp.jpg" width="30" height="20"> </a>

				                 							 <input type="hidden" name="date_" value="<?php echo htmlspecialchars($_POST['date_depart']);?>"> 
				                 							  <input type="hidden" name="date2_" value="<?php echo htmlspecialchars($_POST['date_fin']);?>"> 
				                 							  <input type="hidden" name="nomhotel" value="<?php echo htmlspecialchars($rs['NOM_HOTEL_']);?>"> 
				                 							   <input type="hidden" name="typechambre" value="<?php echo htmlspecialchars($_POST['chambre_type']);?>"> 
				                 							   <input type="hidden" name="numhotel" value="<?php echo htmlspecialchars($rs['N_HOTEL']);?>"> 
				                						
				                					
				                				</td>
       										
      										</tr>
										<?php 	} ?>
									</tbody>
									</table>
								</form>
									</div >
				
		
	
	
