<?php

$value = $_POST['PInvoice'];

if ($value>0) {
		
$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

$sql="SELECT * FROM shipment WHERE id=$value";

$result2 = mysql_query($sql);

$row = mysql_fetch_array($result2);

if (!mysql_query($sql,$con))
{
	die("Error: ".mysql_error());	
}
$msg="";
}
else {
$msg="You have to select a shipment to get invoice";	
}

$sql1 = "SELECT * FROM product WHERE productname = '$row[product]'";

$result3 = mysql_query($sql1);

$row1 = mysql_fetch_array($result3);

$price = $row1['price']*$row['quantity'];

$tax = ($row['tax']/100)*$price;

$totall = $price+$tax;


?>



<!DOCTYPE html>
<html>
	<head>
		<title>OPMS-Invoice.</title>
		<link rel="stylesheet" type="text/css" href="invoice.css"/>
		
	</head>
	<body>
		<div id="invoice" style="height: 400px; width: 500px; border: 2px solid #FF6600" >
			<h2 align="center">Invoice</h2>
			<table>
				
				<tr>
						<td>Entry date: </td>
						<td><?php echo "$row[date]"; ?></td>
						
				</tr>
				<tr>
					<td> Customer name: </td> 
					<td><?php echo "$row[customername]"; ?></td>
					</tr>
					
					<tr>
						<td>Product brand: </td>
						<td><?php echo "$row1[brand]"; ?></td>
					</tr>
					
					<tr>
					<td>Product bought: </td>
					<td><?php echo "$row[product]"; ?></td>
					</tr>
					
					<tr>
						<td>Product's price: </td>
						<td><?php echo "$row1[price]"; ?></td>
					</tr>
					
					<tr>
					<td>Quantity: </td>
					<td><?php echo "$row[quantity]"; ?></td>
					</tr>
					
					<tr>
					<td>Price for <?php echo "$row[quantity]"; ?> piece(s): </td>
					<td><?php echo "$price"; ?></td>
					</tr>
					
					<tr>
					<td>Totall Tax (<?php echo "$row[tax]"; ?> %):</td>
					<td><?php echo $tax; ?></td>
					</tr>
					
					<tr>
						<td>Totall price: </td>
						<td><?php echo "$totall"; ?></td>
						
					</tr>
										
				<?php echo "$msg"; ?>
			</table>
		</div>
		
		<div id="buttion" style="height: 50px; width: 500px;" >
		<table>
			<tr>
<input type="button"
  onClick="window.print()"
  value="Print Invoice"/>
  </tr>
  
  <tr>
  	<form action="shipment.php" method="post">
  		<input type="submit" id="goback" name="goback" value="Go back" />
  	</form>
  </tr>
  
  </table>
  </div>
	</body>
</html>
