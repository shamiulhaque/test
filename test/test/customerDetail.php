<?php 

$value = $_POST['listbox'];

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

$sql="SELECT * FROM customer WHERE id=$value";

$result = mysql_query($sql);

if (!mysql_query($sql,$con))
{
	die("Error: ".mysql_error());	
}
while ($row=mysql_fetch_assoc($result))
{
	echo "<table>";
	
	echo "<tr>";
	echo "<td>ID:</td>";
	echo "<td>$row[id]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>First name:</td>";
	echo "<td>$row[firstname]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Last name:</td>";
	echo "<td>$row[lastname]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Email:</td>";
	echo "<td>$row[email]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Phone no:</td>";
	echo "<td>$row[phone]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Street address:</td>";
	echo "<td>$row[address]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Post code:</td>";
	echo "<td>$row[postcode]</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>City:</td>";
	echo "<td>$row[city]</td>";
	echo "</tr>";
		
	echo "<table>";

}
echo "$value";

?>