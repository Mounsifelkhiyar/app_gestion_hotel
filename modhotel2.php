	
 			<?php
 		
 			 		mysql_query('UPDATE hotel SET NOM_HOTEL_="'.$_POST['nom_hotel'].'",ID_VILLE="'.$_POST['ville_hotel'].'",ADRESSE_HOTEL_="'.$_POST['adresse_hotel'].'" ,TEL_HOTEL_="'.$_POST['telephone_hotel'].'" ,NBR_ETOILE="'.$_POST['etoile_hotel'].'" where N_HOTEL="'.$_POST['num_hotel'].'"') or die(mysql_error());
 		
 		
             echo "l'hotels a été bien modifier 1 ";
     
 			?>