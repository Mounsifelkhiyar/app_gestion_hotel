		
 			<?php
 			mysql_query('DELETE FROM reservation WHERE N_RESERVATION="'.$numreserv.'"') or die(mysql_error());
										echo "<h2><font color=blue> la reservation a été bien supprimé</font></h2>";

 			?>