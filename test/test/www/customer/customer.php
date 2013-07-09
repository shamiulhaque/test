<!DOCTYPE html>
<html>
	<head>
		<title>OCMS-Customer Info.</title>
		
		<link rel="stylesheet" type="text/css" href="customer.css"/>
	</head>
	<body>
		<div id="header">
			<p> <font size="6"> 
				Online Customer Info. Management System
				</font>
			</p>
		</div>
		
		<div id="mainmenu">
			
			<ul>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/home.php">Home</a></li>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/customer.php">Customer</a></li>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/product.php">Product</a></li>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/shipment.php">Shipment</a></li>
				<li><a href="http://arcada.it-edu.fi/php14/haquabm/refreshment.php">Refreshment</a></li>
			</ul>
			
		</div>
		
		<div id="maincontent">
			
			<h1 align="center">Customer Information</h1>
			
		<div id="inside" style="height: 220px; width: 200px;">
			
			<form action="" method="post">
			<table>
				<tr>
			<select id='listbox1' name='listbox1' style= 'width:200px; height:193px' size="7" value='listbox1'>
			
			</select>
			</tr>
			
			</table>
			
			<button type="submit">Update</button>
			<button type="submit">Delete</button>
			
		</form>
			
		</div>
		
		<div id="inside2" style="height: 220px; width: 200px; ">
			
		<form action="getCustomerInfo.php" method="post">


			<table>			
			<tr>
			<select id='listbox' name='listbox' style= 'width:200px; height:193px' size='7' value='listbox';

			
			</select>
			
			</tr>
			</table>
			
			<input type="submit" id="list" name="List" value="List all customers"></input>
			</form>
		   
			<button type="submit">Get detail</button>
			

	
		</div>
		
		<div id="inside1" style="height: 220px; width: 250px;">
			
			<form action="customerInfoInsert.php" method="post">

			<table>
			
			<tr>
			<td><label for="firstname">First name:</label></td>
			<td><input id="firstname" type="text" name="firstname" /></td>
			</tr>
			
			<tr>
			<td><label for="lastname">Last name:</label></td>
			<td><input id="lastname" type="text" name="lastname" /></td>
			</tr>
				
			<tr>		
			<td><label for="email">Email:</label></td>
			<td><input id="email" type="text" name="email" /></td>
			</tr>
			
			<tr>
			<td><label for="phone">Phone no:</label></td>
			<td><input id="phone" type="text" name="phone" /></td>
			</tr>
			
			<tr>
			<td><label for="address">Street address:</label></td>
			<td><input id="address" type="text" name="address" </td>
			</tr>
			
			
			<tr>
			<td><label for="postcode">Post code:</label></td>
			<td><input id="postcode" type="text" name="postcode" size="8" /></td>
			</tr>
			
			<tr>
			<td><label for="city">City:</label></td>
			<td><input id="city" type="text" name="city" size="15"/></td>
			</tr>	
			
			</table>	
			
			<button type="submit">Add</button>
			<button type="reset">Reset</button>
								
		</form>
			
		</div>
		
		<div id="info" style="height: 40px; border: 2px solid #FF6600">
			
		</div>
		<table>
			<tr>
				<td>
		<div id="search" style="height: 100px; width: 185px;border: 2px solid #FF6600">
			
			<label for="search">Search by:</label>
			
			<select id="selectBy" name="selectBy">
				<option value="0" selected="selected">Select</option>
				<option value="1">First name</option>
				<option value="2">Last name</option>
				<option value="3">Email</option>
				<option value="4">Phone no</option>
				<option value="5">Street address</option>
				<option value="6">Post code</option>
				<option value="7">City</option>
				
			</select>  <br />
			
			<form action="searchList.php" method="post">
				
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
						
		    </select>
		    
		</div>
		</td>
		</tr>
	</table>
	</div>
		
		<div id="footer">
			<p>© Shamiul Haque</p>
		</div>
		
	</body>
</html>










