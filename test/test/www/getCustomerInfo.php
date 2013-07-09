<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die("Could not connect: ".mysql_error());
}

mysql_select_db("haquabm", $con);

$query1 = "SELECT COUNT(id) AS totall FROM customer";
$count=mysql_query($query1);
$totall = mysql_fetch_array($count);

echo "Totall number of customer : $totall[totall]";

$query = "SELECT id,firstname,lastname FROM customer ORDER BY id";

$result = mysql_query($query);


echo "<form action='customerDetail.php' method='post'>";

echo "<p>Customer's list: </p>";

echo "<select id='listbox' name='listbox' style= 'width:150px; height: 250px' size='15' value='listbox'";

while($row = mysql_fetch_array($result))
  {
echo "<option value = '$row[id]': '$row[firstname]', '$row[lastname]' </option>";

echo "$row[id]";
echo ": ";
echo "$row[firstname]";
echo ", ";
echo "$row[lastname]";

  }
  
echo "</select>";

echo "<input type='submit' value='Get detail.' name='submit'/>";

echo "</form>";

mysql_close($con);

?>
 

	




