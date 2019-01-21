
<?php
      //1. Create a connection_aborted
	  $connection = mysql_connect("localhost", "root", "");
?>
<?php
      //1. Create a connection_aborted
	  $db = mysql_select_db("sterling", $connection);

?>

	    <?php require_once("includes/connect.php"); ?>
	    <?php require_once("includes/functions.php"); ?>
		<?php include("includes/header.php"); ?>

		<div id="content">
		<h2>Village Park</h2>
		  </div>
		
		<div id="content"><!-- Main Content -->
		<table id="table">
		<tr>
	        <td id="nav">
	  <?php
		 // 3. Ask database question
 $result = mysql_query("SELECT * FROM information", $connection);		 
		?>
		
		<?php
		 // 3. Use Data
 while($row = mysql_fetch_array($result)){
	   echo $row[1]." ".$row[2]."<br />";
 }	 
		?>
		
			</td>
				<td id="main">
				<h2>Main Content</h2>
				</td>
		</tr>
		</table>
	</div>
	       <?php
		   
		   include("includes/footer.php");
		   
		   ?>
		   
		   <?php		   
		   //5. Close information
		   mysql_close($connection);
		   
		   ?>
</body>
</html> 