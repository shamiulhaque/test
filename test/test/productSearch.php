<?php

$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die("Could not connect: ".mysql_error());
}

mysql_select_db("haquabm", $con);

$query1 = "SELECT COUNT(id) AS totall FROM product";
$count=mysql_query($query1);
$totall = mysql_fetch_array($count);

$totall= "Totall number of product : $totall[totall]";

$query = "SELECT id,productname FROM product ORDER BY id";

$result = mysql_query($query);

mysql_close($con);

?>

<?php

$inbox = $_POST['searchInput'];
if($inbox==TRUE){
$msg = "Searched item(s) has been showed.";
$con = mysql_connect("localhost", "haquabm", "a1234567");

if(!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("haquabm", $con);

$sql="SELECT * FROM product WHERE brand='$inbox'";

$sql2="SELECT COUNT(id) AS ids FROM product WHERE brand='$inbox'";

$result1 = mysql_query($sql);

$result2= mysql_query($sql2);

$row2 = mysql_fetch_assoc($result2);

if (!mysql_query($sql,$con))
{
	die("Error: ".mysql_error());	
}
	
}
else{
	$msg = "You have to put brand name to search!!";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OPMS-Product Info.</title>
		
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
				<img src="product.jpg" height="200" width="187"/>
			</div>
			
		</div>
		
		<div id="maincontent">
			
			<h1 align="center">Product Information</h1>
			
		<div id="inside" style="height: 220px; width: 200px;">
			
			<form action="productDelete.php" method="post">
			<table>
			<tr>
			
			<select id='listbox1' name='listbox1' style= 'width:200px; height:193px' size="7" value='listbox1'>
			
			</select>
			
			</tr>			
			
	<tr>		

			<button type="submit">Delete</button>
	</tr>
	</table>						
		</form >
			
		</div>
		
		<div id="inside2" style="height: 220px; width: 200px; ">
			
		<form action="productDetail.php" method="post">


			<table>			
			<tr>
			<?php		
		echo "<select id='listbox' name='listbox' style= 'width:200px; height:193px' size='7' value='listbox'>";
		?>
<?php while($row = mysql_fetch_array($result))
  {
echo "<option value = '$row[id]': '$row[productname]' </option>";

echo "$row[id]";
echo ": ";
echo "$row[productname]";


  }?>
			
			<?php
			echo "</select>";
			?>
			
			</tr>
			<tr>
			<button type="submit">Get detail</button>
			</tr>
			</form>
			
		   <form action="productList.php" method="post">
		   	
			<tr>
			<input type="submit" id="list" name="List" value="List all customers"></input>
			</tr>
			</table>
			</form>

	
		</div>
		
		<div id="inside1" style="height: 220px; width: 250px;">
			
			<form action="productAdd.php" method="post">

			<table>
			
			<tr>
			<td><label for="name">Product's name:</label></td>
			<td><input id="name" type="text" name="name" /></td>
			</tr>
			
			<tr>
			<td><label for="brand">Product's brand:</label></td>
			<td><input id="brand" type="text" name="brand" /></td>
			</tr>
				
			<tr>		
			<td><label for="quantity">Quantity:</label></td>
			<td><input id="quantity" type="text" name="quantity"  /></td>
			</tr>
			
			<tr>
			<td><label for="price">Price/piece:</label></td>
			<td><input id="price" type="text" name="price" /></td>
			</tr>
			
			<tr>
			<td><label for="description">Description:</label></td>
			<td><textarea id="description" name="description" cols="16" rows="3"></textarea></td>
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
			<td> <label style="color: #FF0000"><?php echo $msg ?></label></td>
			</tr>
			</table>
		</div>
		<table>
			<tr>
				<td>
		<div id="search" style="height: 100px; width: 185px;">
			
			<label for="search">Search by brand name:</label>
			
			<form action="productSearch.php" method="post">
				
				
			<input id="searchInput" type="text" name="searchInput" size="15" />
			<button id="searchButton" name="searchButton">Search</button>
			
			</form>
		</div>
		</td>
		
		<td>
			<label>Search Result: </label>
		</td>
		
		<td>
		<div id="searchList" style="height: 220px; width:270px;">
			
			<select id="searchResult" name="searchResult" style="height: 220px; width: 270px" size="7">
				<option value ='0'> <?php 
				if($inbox==TRUE){
					echo "Searched result item(s): $row2[ids]";
				}
				else {
					echo "No brand name found to search!!";
				}
				?>
				</option>;
				<option value =''></option>;
<?php

	
while ($row=mysql_fetch_assoc($result1))
{
	echo "<option value ='1'>Id:$row[id] </option>";
	echo "<option value = '2'> Product's name: $row[productname]</option>";
	echo "<option value = '3'> Brand: $row[brand]</option>";
	echo "<option value = '4'> Quantity: $row[quantity]</option>";
	echo "<option value = '5'> price/piece: $row[price]</option>";
	echo "<option value = '6'> Description: $row[description]</option>";
	echo "<option value = '7'></option>";
	
echo "$row[productname]";
echo "$row[brand]";
echo "$row[quantity]";
echo "$row[price]";
echo "$row[description]";

}	

?>						
		    </select>
		    
		</div>
		</td>
		</tr>
	</table>
	</div>
		
		<div id="footer">
			<p>© Shamiul Haque</p>
		</div>
		</div>
	</body>
</html>









