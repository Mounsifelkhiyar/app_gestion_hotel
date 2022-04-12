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
				                       if (isset($_POST['Ajoutecham']))

				                       if($_POST['numero_chambre']!='' && $_POST['numero_hotel']!='' && $_POST['categorie']!='' && $_POST['telephone_chambre']!='')
				                       {				                       		


				                       	$rreq=mysql_query('INSERT INTO chambre(N_CHAMBRE,N_HOTEL, ID_CATEGORIE,TEL_CHAMBRE) VALUES ( "'.$_POST['numero_chambre'].'","'.$_POST['numero_hotel'].'","'.$_POST['categorie'].'","'.$_POST['telephone_chambre'].'")') or die(mysql_error());

				                       
 										

				                       	/**
 																				
				                        $rs1=mysql_fetch_array(mysql_query('SELECT N_HOTEL FROM hotel WHERE N_HOTEL="'.$_POST['N_HOTEL'].'"'));

										$rs2=mysql_fetch_array(mysql_query('SELECT ID_CATEGORIE FROM categorie WHERE ID_CATEGORIE="'.$_POST['ID_CATEGORIE'].'"'));

										$rs3=mysql_fetch_array(mysql_query('SELECT N_CHAMBRE FROM chambre WHERE N_CHAMBRE="'.$_POST['numero_chambre'].'"'));

										mysql_query('INSERT INTO concerne(N_CHAMBRE) VALUES ("'.$rs3[0].'")') or die(mysql_error());
										**/


				                       	if($rreq)
				                       	{
				                       		echo"<h4><font color=blue>Chambre est bien ajouté </font></h4>";
				                       	}

				                       	}
				                       	else
				                       	{
				                       		echo"<h4><font color=red> vous devez remplir tous les champs</font></h4>";
				                       	}

									
				                       ?>


					<div class="col-md-10">
						<h3> Ajouter chambre</h3>
							<form method="post"  action="ghotel.php?action=newcham">
							<div class="row form-group">
								<div class="col-md-12">
									<label >Numero :</label>
									<input type="text" name="numero_chambre" class="form-control" placeholder=" numero chambre">
								</div>
								<div class="col-md-12">
				                    <label >Hotel:</label>
				                  <?php
				                       $rr1=mysql_query('SELECT N_HOTEL,NOM_HOTEL_ FROM hotel ');
				                     ?>
				                      <select name="numero_hotel" class="form-control">
				                     

				                       <?php
				                       while ($rss=mysql_fetch_array($rr1))

				                       {
				                       	?>

				                        <option value="<?php echo htmlspecialchars($rss['N_HOTEL']);?>" ><?php echo htmlspecialchars($rss['NOM_HOTEL_']);?></option>
				                        <?php
										}
										?>
				                     
				                      </select>
				                    
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
									<input type="text" name="telephone_chambre" class="form-control" placeholder=" Téléphone">
								</div>
								 
							<div class="col-md-12">
									<label ></label>
								</div> 
							<div class="form-group text-center">
								<input type="submit" name="Ajoutecham" value="Ajouter chambre" class="btn btn-primary">
							</div>

						</form>		
					</div>