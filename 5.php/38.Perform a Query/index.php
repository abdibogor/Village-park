<?php 
// 1 Create a database connection
     $connect = mysql_connect("localhost", "root",  "");
	 //mysqli_connect("localhost:8080", "root",  "", "guitar");
	 
?>

<?php
		// 2 select a database
		$database = mysql_select_db("guitar", $connect);
 
?>

<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>
		<!--
      Connecting to a database
	 1. Create a Connection 
	 2. Select a Database
	 3. Perform Database Query
	 4. Use Returned Data.
	 5. Close Connection
-->

	  <?php
	      // 3. Perform a query (Ask a Question)
		  $equals = mysql_query("SELECT * FROM information", $connect);
		  
	  
	  ?>

</body>
</html> 