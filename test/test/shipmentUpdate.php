<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die("Could not connect: ".mysql_error());
}

mysql_select_db("haquabm", $con);

$query1 = "SELECT id,firstname,lastname FROM customer ORDER BY id";

$result = mysql_query($query1);

mysql_close($con);

?>

<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die("Could not connect: ".mysql_error());
}

mysql_select_db("haquabm", $con);

$query2 = "SELECT id,productname FROM product ORDER BY id";

$result1 = mysql_query($query2);

mysql_close($con);

?>

<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die("Could not connect: ".mysql_error());
}

mysql_select_db("haquabm", $con);

$sql1 = "SELECT id,customername,product,quantity FROM shipment ORDER BY id";

$result3 = mysql_query($sql1);

mysql_close($con);

?>

<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die("Could not connect: ".mysql_error());
}

mysql_select_db("haquabm", $con);

$sql5 = "SELECT id,customername,product,quantity FROM shipment ORDER BY id";

$result7 = mysql_query($sql5);

mysql_close($con);

?> 


<?php

$value = $_POST['Pupdate'];

		
$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

$sql10="SELECT * FROM shipment WHERE id=$value";

$result10 = mysql_query($sql10, $con);

$row10 = mysql_fetch_array($result10);

$count = $row10['quantity'];

$sql12 = "SELECT * FROM product WHERE productname = '$row10[product]'";

$result12 = mysql_query($sql12,$con);

$row12 = mysql_fetch_array($result12);

$count1 = $row12['quantity'];

$totall = $count1-$count;

$sql14 = "UPDATE product SET quantity = '$totall' WHERE productname= '$row10[product]'";

$result14 = mysql_query($sql14);




?>




<!DOCTYPE html>
<html>
	<head>
		<title>OPMS-Shipment Info.</title>
		
		<link rel="stylesheet" type="text/css" href="customer.css"/>
	</head>
	<body>
		<div id="full">
		<div id="header">
			

			<p> <font size="6"> 
				Online Product Info. Management System
				</font>
			</p>
		</div>
		
		<div id="mainmenu">
			
			<ul>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/home.php">Home</a></li>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/product.php">Product</a></li>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/customer.php">Customer</a></li>			
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/shipment.php">Shipment</a></li>
				
			</ul>
			
									<div id="pic">
				<img src="shipment.gif" height="200" width="187"/>
			</div>
			
		</div>
		
		<div id="maincontent">
			
			<h1 align="center">Shipment Information</h1>
			
		<div id="inside" style="height: 220px; width: 200px;">
			
			<form action="shipmentDelete.php" method="post">
			<table>
			<tr>
			
			<select id='listbox1' name='listbox1' style= 'width:220px; height:193px' size="7" value='listbox1'>
			
			</select>
			
			</tr>			
			
	<tr>		

			<button type="submit">Delete</button>
	</tr>
	</table>							
		</form >
			
		</div>
		
		<div id="inside2" style="height: 220px; width: 200px; ">
			
		<form action="shipmentDetail.php" method="post">


			<table>			
			<tr>
			<select id='listbox' name='listbox' style= 'width:220px; height:193px' size='7' value='listbox';

			
			</select>
			
			</tr>
			
			
			<tr>
			<button type="submit">Get detail</button>
			</tr>
			</form>
			
		   <form action="shipmentList.php" method="post">
		   	
			<tr>
			<input type="submit" id="list" name="List" value="List all shipments"></input>
			</tr>
			</table>
			</form>
			
		</div>
		
		<div id="inside1" style="height: 220px; width: 250px;">
			
			<form action="shipmentAdd.php" method="post">

			<table>
			
			<tr>
			<td><label for="Cname">Customer's name:</label></td>
			<td><select id="Cname" name="Cname" ><option>Select</option>
<?php while($row = mysql_fetch_array($result))
  {
  	
   echo"<option>$row[firstname] $row[lastname]</option>";

  }?>
              </select>
			</td>
			</tr>
			
			<tr>
			<td><label for="Pname">Product's name:</label></td>
			<td><select id="Pname" name="Pname"><option>Select</option>
<?php while($row1 = mysql_fetch_array($result1))
  {
  	
   echo"<option>$row1[productname]</option>";

  }?>
    		</select>
			</td>
			</tr>
				
			<tr>		
			<td><label for="quantity">Quantity:</label></td>
			<td><input id="quantity" type="text" name="quantity"  /></td>
			</tr>
			
			<tr>
			<td><label for="tax">Tax:</label></td>
			<td><input id="tax" type="text" name="tax" /></td>
			<td><label for="taxSign">%</label></td>
			</tr>	
			
			</table>	
			
			<button type="submit">Add</button>
			<button type="reset">Reset</button>
								
		</form>
			
		</div>
		
		<div id="info" style="height: 40px;">
			<table>
			<tr>	
			<td><label>Message display: </label></td>
			<td> <label style="color: #FF0000">Product quantity has been updated.Now available <?php echo "$row10[product]";?> are: <?php echo "$totall"; ?></label></td>
			</tr>
			</table>
		</div>
		
		
		<table>
			
		<tr>		
		<div id="search" style="height: 70px; width: 250px;">
			
			<label for="search">Update product's quantity: </label>
			
			<form action="shipmentUpdate.php" method="post">
				
				
		<select id="Pupdate" name="Pupdate"><option >Select</option>
        
<?php while($row5 = mysql_fetch_array($result3))
  {
  	
   echo"<option value='$row5[id]'>$row5[customername],$row5[product],$row5[quantity] </option>";

  }?>
    		</select>
    		
			<button id="searchButton" name="searchButton">Update</button>
			
			</form>

		</div>
		</tr>
		
		<tr>
			<div id="invoice" style="height: 100px; width: 250px;">
	<label for="invice">Get shipment's invoice: </label>	
		<form action="shipmentInvoice.php" method="post">
				
				
		<select id="PInvoice" name="PInvoice"><option value="">Select</option>
        
<?php while($row6 = mysql_fetch_array($result7))
  {
  	
   echo"<option value='$row6[id]'>$row6[customername],$row6[product],$row6[quantity] </option>";

  }?>
    		</select>
    		
			<button id="searchButton" name="searchButton">Invoice</button>
			
			</form>
				
			</div>
		</tr>
		
	</table>
	
			
		<div id="footer">
			<p>© Shamiul Haque</p>
		</div>
		</div>
	</body>
</html>










