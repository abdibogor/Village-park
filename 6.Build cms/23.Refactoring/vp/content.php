
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
			<ul class="info">
	  <?php
		 // 3. Ask database question
 $result = mysql_query("SELECT * FROM information", $connection);		 
		
		 // 4. Use Data
 while($row = mysql_fetch_array($info_set)){
	   //echo $row[1]." ".$row[2]."<br />";
	   echo "<li>{$info["menu"]}</li>"; //inline substution
	 
   //3. Ask database question
 $page_set = mysql_query("SELECT * FROM pages WHERE information_id ={$info}["id"]}", $connection);
  echo "<ul class=\"pages\">";
		//4. Use Data
 while($row = mysql_fetch_array($page_set)){
	   echo "<li>{$info_set["menu"]}</li>"; //inline substution
 }
		echo "</ul>";
 }	
		?>
		</ul>
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