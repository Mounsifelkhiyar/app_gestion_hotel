					
 			<?php
 			mysql_query('DELETE FROM hotel WHERE N_HOTEL="'.$_GET['numhotel'].'"') or die(mysql_error());
										echo "<h2><font color=blue> l'hotel a été bien supprimé</font></h2>";

 			?>