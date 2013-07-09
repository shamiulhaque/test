<?php
$con  = mysql_connect('localhost','haquabm','a1234567');

if(!$con)
{
	die(mysql_error());
}
mysql_select_db('haquabm', $con);

$query = mysql_query('SELECT * FROM feedback ORDER BY id DESC');

while($row = mysql_fetch_assoc($query))
{
	$output[] = $row;
}

print(json_encode($output));

mysql_close($con);

?>





