<?php

		require("constants.php");

	 //1. Create a connection
	 $connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS); 
?>

<?php
	 //1. Create a connection
	 $db = mysql_select_db(DB_NAME,  $connection); 
?>