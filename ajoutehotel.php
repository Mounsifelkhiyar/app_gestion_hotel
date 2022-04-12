					
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
				                       if (isset($_POST['Ajouteh']))

				                       if($_POST['nom_hotel']!='' && $_POST['ville_hotel']!='' && $_POST['adresse_hotel']!='' && $_POST['telephone_hotel']!='' && $_POST['etoile_hotel']!='')
				                       {				                       		


				                       	$req=mysql_query('INSERT INTO hotel(NOM_HOTEL_,ID_VILLE, ADRESSE_HOTEL_,TEL_HOTEL_,NBR_ETOILE) VALUES ( "'.$_POST['nom_hotel'].'","'.$_POST['ville_hotel'].'","'.$_POST['adresse_hotel'].'","'.$_POST['telephone_hotel'].'","'.$_POST['etoile_hotel'].'")') or die(mysql_error());
				                       	if($req)
				                       	{
				                       		echo"<h4><font color=blue>Hotel est bien ajouté </font></h4>";
				                       	}

				                       	}
				                       	else
				                       	{
				                       		echo"<h4><font color=red> vous devez remplir tous les champs</font></h4>";
				                       	}


				                       ?>


					<div class="col-md-10">
						<h3> Ajouter hotel</h3>
							<form method="post"  action="ghotel.php?action=newhotel">
							<div class="row form-group">
								<div class="col-md-12">
									<label >Nom :</label>
									<input type="text" name="nom_hotel" class="form-control" placeholder=" nom">
								</div>
								<div class="col-md-12">
				                    <label >ville:</label>
				                  <?php
				                       $r=mysql_query('SELECT ID_VILLE,NOM_VILLE FROM ville');
				                     ?>
				                      <select name="ville_hotel" class="form-control">
				                     

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
									<input type="text" name="adresse_hotel" class="form-control" placeholder=" Adresse">
								</div>
								<div class="col-md-12">
									<label >Téléphone:</label>
									<input type="text" name="telephone_hotel" class="form-control" placeholder=" Téléphone">
								</div>
								<div class="col-md-12">
									<label >Etoile:</label>
									<input type="text" name="etoile_hotel" class="form-control" placeholder=" etoile">
								</div> 
							<div class="col-md-12">
									<label ></label>
								</div> 
							<div class="form-group text-center">
								<input type="submit" name="Ajouteh" value="Ajouter hotel" class="btn btn-primary">
							</div>

						</form>		
					</div>
					