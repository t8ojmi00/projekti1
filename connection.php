<?php
	try
	{
	 $conn_string = "mysql:host=mysli.oamk.fi;dbname=opisk_t8ojmi00";
	 $db = new PDO ($conn_string, "t8ojmi00", "WwCn7wRE7GctYNnY");
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
