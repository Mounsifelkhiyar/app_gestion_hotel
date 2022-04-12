<?php
 		mysql_query('DELETE FROM chambre WHERE id_CHAMBRE="'.$numcham.'"') or die(mysql_error());
										mysql_query('DELETE FROM concerne WHERE id_CHAMBRE="'.$numcham.'"') or die(mysql_error());
										 echo "<h2><font color=blue> la chambre a été bien supprimé</font></h2>";
 			?>