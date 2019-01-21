<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

 	$numbers = array(1, 4, 5, 8, 15, 54, 95); // foreach is gonna loop 7*
	
	foreach($numbers as $number){
		echo $number . "<br>";
	}

?>
<br>

<?php
	  foreach ($numbers as $key => $number){
		  echo $key . ": " . $number . "<br>";
	  }

?>

</body>
</html> 

