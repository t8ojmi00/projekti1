<?php
	try
	try
	{
	 $conn_string = "mysql:host=mysli.oamk.fi;dbname=opisk_t8ojmi00";
	 $db = new PDO ($conn_string, "t8ojmi00", "Latv1s0808");
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
