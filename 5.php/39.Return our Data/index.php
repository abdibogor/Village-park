<?php 
// 1 Create a database connection
     $connect = mysql_connect("localhost", "root",  "");
	 
?>

<?php
		// 2.select a database
		$database = mysql_select_db("guitar", $connect);
 
?>

<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

	  <?php
	  //3. Perform a Query (Ask a Question)
		  $equals = mysql_query("SELECT * FROM information", $connect);	  
	  
	  ?>
	  
	  <?php
	        // 4. Return  the data
		while ( $column = mysql_fetch_array($equals)){
			echo $column[1]. " ".$column[2]. "<br>";
		}
	  ?>

</body>
</html> 

<?php
	   mysql_close($connect);
?>