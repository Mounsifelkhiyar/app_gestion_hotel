
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


				      if (isset($_POST['Modifiercham']))
				    {
 
				    		if($_POST['numero_chambre']!='' && $_POST['numero_hotel']!='' && $_POST['categorie']!='' && $_POST['telephone_chambre']!='')
				                       {				                       		


				                       	$req=mysql_query('UPDATE chambre SET ID_CATEGORIE="'.$_POST['categorie'].'" ,TEL_CHAMBRE="'.$_POST['telephone_chambre'].'"  where id_CHAMBRE="'.$_POST['numero_chambre'].'"') or die(mysql_error());
				                       	if($req)
				                       	{
				                       		echo"<h4><font color=blue>Chambre est bien modifier </font></h4>";
				                       	}

				                       	}
				                       	else
				                       	{
				                       		echo"<h4><font color=red> vous devez remplir tous les champs</font></h4>";
				                       	}

  		 } else
  		 {

		$result=mysql_fetch_array(mysql_query('SELECT id_CHAMBRE, chambre.N_HOTEL, NOM_HOTEL_, chambre.ID_CATEGORIE, TEL_CHAMBRE, N_CHAMBRE
			FROM chambre, hotel, categorie
			WHERE hotel.N_HOTEL = chambre.N_HOTEL
				AND chambre.ID_CATEGORIE = categorie.ID_CATEGORIE
				AND id_CHAMBRE ="'.$numcham.'"'));
		?>
		<div class="col-md-10">
						<h3> Modification chambre</h3>
							<form method="post"  action="ghotel.php?action=listeChmbre&opr2=modcham">			

							<div class="row form-group">
								<div class="col-md-12">
									<label >Numero :</label>
									<input type="text" name="numero_chambre" class="form-control" value="<?php echo htmlspecialchars($result['N_CHAMBRE']);?>" readonly="readonly">
								</div>

								<div class="col-md-12">
				                    <label >Hotel:</label>
				                    <input type="text" name="numero_hotel" class="form-control" value="<?php echo htmlspecialchars($result['NOM_HOTEL_']);?>" readonly="readonly">
								</div>
				               
				                 </div>
								<div class="col-md-12">
				                    <label >Catégorie:</label>
				                  <?php
				                       $rr2=mysql_query('SELECT ID_CATEGORIE,TYPE FROM categorie');
				                     ?>
				                      <select name="categorie" class="form-control">
				                     

				                       <?php
				                       while ($rss1=mysql_fetch_array($rr2))

				                       {


				                       	?>

				                        <option value="<?php echo htmlspecialchars($rss1['ID_CATEGORIE']);?>" ><?php echo htmlspecialchars($rss1['TYPE']);?></option>
				                        <?php
										}
										?>
				                     
				                      </select>
				                    
				                 </div>
								
								<div class="col-md-12">
									<label >Téléphone:</label>
									<input type="text" name="telephone_chambre" class="form-control" value="<?php echo htmlspecialchars($result['TEL_CHAMBRE']);?>">
								</div>
							
							<div class="col-md-12">
									<label ></label>
								</div> 
							<div class="form-group text-center"> 

								<input type="submit" name="Modifiercham" value="Modifier chambre" class="btn btn-primary">
							</div>

						</form>		
					</div>
<?php
 		}
 			
 			?>