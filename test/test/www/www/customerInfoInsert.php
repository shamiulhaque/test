<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

$sql = "INSERT INTO product (productname, brand,quantity,price,description)
		VALUES ('$_POST[name]', '$_POST[brand]', '$_POST[quantity]', '$_POST[price]', '$_POST[description]')";
				
if (!mysql_query($sql,$con))
{
	die("Error: ".mysql_error());	
}
echo "<b>Your information has been added to your database.</b>";

mysql_close($con);


?>
