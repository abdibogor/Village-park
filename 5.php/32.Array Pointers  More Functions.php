<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

 	$vp = array(4, 6, 8, 12, 20, 44);  

?>

<?php

	   echo "1: " . current($vp) . "<br>"; // php function current let's us know what element the array is currently sitting at
	   next($vp); // php function that moves the array pointer to the next element in the array
	   echo "2: " . current($vp) . "<br>";
	   reset($vp); //php function that starts the array pointer back to the elements.
	   echo "3: " . current($vp). "<br>";
	   

?>
</body>
</html> 

