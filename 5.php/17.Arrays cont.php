<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

	/*
 	$random = array(6, "phone", "wallet", "glasses", 4, "Headgear");
	echo $random[1];
	*/
	
	$random = array(6, "phone", "wallet", array(55, "pencil", "glue", "cards", 34));
	echo $random[3][2]; 
	
?>

</body>
</html> 

