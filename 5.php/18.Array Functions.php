<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
	
	$a = array (23, 0, 4, 8, 12, 55, 80, 43);	
	
?>

 Count: <?php echo count($a);?><br>
 Is it an array?: <?php echo is_array($a);?><br>
 Max Value: <?php echo max($a); ?><br>
 Minimum Value: <?php echo min($a); ?><br>
 Sort (Ascendingly):<?php echo rsort($a); print_r($a); ?><br>
 

</body>
</html> 

