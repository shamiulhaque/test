<?php

$a = $_POST['name'];

$b = $_POST['comment'];

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

if($a && $b != null){

$sql = "INSERT INTO feedback (name, comment)
		VALUES ('$a', '$b')";
				
if (!mysql_query($sql,$con))
{
	die("Error: ".mysql_error());	
}

}
mysql_close($con);

?>






