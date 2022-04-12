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