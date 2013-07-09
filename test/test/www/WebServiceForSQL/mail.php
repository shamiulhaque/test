<?php
$con = mysql_connect("localhost","haquabm","a1234567");
if(!$con)
{
	die(mysql_error());
}

mysql_select_db("haquabm", $con);

$sql = "SELECT id,firstname,lastname,city
		FROM customer
		ORDER BY id";
		
$result = mysql_query($sql, $con);
$result2 = mysql_query($sql, $con);

mysql_close($con);

?>
<?php

 
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php
	echo 	"<select name='listbox' value='listbox' size='7' style='width: 300px;>";?>
	
	<?php
	while ($row = mysql_fetch_array($result)) {
		echo "<option value ='$row[id]' >";
		
		echo "ID: ".$row["id"] ;
		echo " NAME: ".$row["firstname"]." ".$row["lastname"] ;
		echo " City: ".$row["city"] ;
		

	}
	?>
	
	<?php echo "</option>";  
	echo "</select> <br />";
	?>	
		
		
		
		<select value='dropdown' name='dropdown'>
		<option>Select</option>
		
		<?php
		while ($row2 = mysql_fetch_array($result2)) {
			echo "<option value='$row2[id]'>$row2[firstname]</option>";
			
			
		};
		?>

		
		</select>
	
		
	</body>
</html>















