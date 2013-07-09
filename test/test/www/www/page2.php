<?php

$value = $_POST['listbox1'];

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

$sql = "DELETE FROM customer WHERE id=$value";
if (isset ($value)) {
	$result = mysql_query($sql);
	
	$message = "item has been deleted";
}
else {
	$message = "you have to select id before deleting!!".mysql_info();
}

echo "$message";







?>