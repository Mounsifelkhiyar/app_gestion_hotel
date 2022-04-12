		
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

				                       ?> <?php
				      if (isset($_POST['Modifierh1']))
				    {
 
				    		$vile=isset($_POST['ville_hotel']) ? $_POST['ville_hotel']:$result['ID_VILLE'];
				                       if($_POST['nom_hotel']!='' && $_POST['ville_hotel']!='' && $_POST['adresse_hotel']!='' && $_POST['telephone_hotel']!='' && $_POST['etoile_hotel']!='')
				                       {				                       		


				                       	$req=mysql_query('UPDATE hotel SET NOM_HOTEL_="'.$_POST['nom_hotel'].'",ID_VILLE="'.$vile.'",ADRESSE_HOTEL_="'.$_POST['adresse_hotel'].'" ,TEL_HOTEL_="'.$_POST['telephone_hotel'].'" ,NBR_ETOILE="'.$_POST['etoile_hotel'].'" where N_HOTEL="'.$_POST['num_hotel'].'"') or die(mysql_error());
				                       	if($req)
				                       	{
				                       		echo"<h4><font color=blue>Hotel est bien modifier </font></h4>";
				                       	}

				                       	}
				                       	else
				                       	{
				                       		echo"<h4><font color=red> vous devez remplir tous les champs</font></h4>";
				                       	}

  		 } else
  		 {
				                       ?>
		<?php 
		$result=mysql_fetch_array(mysql_query('select N_HOTEL, NOM_HOTEL_,ADRESSE_HOTEL_,TEL_HOTEL_,NOM_VILLE,NBR_ETOILE,photo_hotel FROM hotel, ville WHERE hotel.ID_VILLE = ville.ID_VILLE AND N_HOTEL="'.$numhot.'"'));
		?>
		<div class="col-md-10">
						<h3> Modification d'hotel</h3>
							<form method="post"  action="modhotel.php">			

							<div class="row form-group">
								<div class="col-md-12">
								<input type="hidden" name="num_hotel" value="<?php echo htmlspecialchars($result['N_HOTEL']);?>"> 


									<label >Nom :</label>
									<input type="text" name="nom_hotel" class="form-control" value="<?php echo htmlspecialchars($result['NOM_HOTEL_']);?>">
								</div>
								<div class="col-md-12">
				                    <label >ville:</label>
				                  <?php
				                       $r=mysql_query('SELECT ID_VILLE,NOM_VILLE FROM ville');
				                     ?>
				                      <select name="ville_hotel" class="form-control">
				                     
				                      	<option value="<?php echo htmlspecialchars($result['ID_VILLE']);?>" ><?php echo htmlspecialchars($result['NOM_VILLE']);?></option>	
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
								
								<div class="col-md-12">
									<label >Adresse :</label>
									<input type="text" name="adresse_hotel" class="form-control"value="<?php echo htmlspecialchars($result['ADRESSE_HOTEL_']);?>">
								</div>
								<div class="col-md-12">
									<label >Téléphone:</label>
									<input type="text" name="telephone_hotel" class="form-control" value="<?php echo htmlspecialchars($result['TEL_HOTEL_']);?>">
								</div>
								<div class="col-md-12">
									<label >Etoile:</label>
									<input type="text" name="etoile_hotel" class="form-control" value="<?php echo htmlspecialchars($result['NBR_ETOILE']);?>">
								</div> 
							<div class="col-md-12">
									<label ></label>
								</div> 
							<div class="form-group text-center"> 

								<input type="submit" name="Modifierh1" value="Modifier hotel" class="btn btn-primary">
							</div>

						</form>		
					</div>
					
 			<?php
 		}
 			/*mysql_query(`UPDATE hotel ID_VILLE="'.$_POST['ville_hotel'].'" ,NOM_HOTEL_="'.$_POST['nom_hotel'].'" ,ADRESSE_HOTEL_="'.$_POST['adresse_hotel'].'" ,TEL_HOTEL_="'.$_POST['telephone_hotel'].'" ,NBR_ETOILE="'.$_POST['etoile_hotel'].'" `) or die(mysql_error());
             echo "l'hotels a été bien modifié";*/
 			?>