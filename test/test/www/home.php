<!DOCTYPE html>
<html>
	<head>
		<title>OPMS-Home</title>
		
		<link rel="stylesheet" type="text/css" href="home.css"/>
	</head>
	<body>
		<div id="full">
		<div id="header">
			<p> <font size="6"> 
				Online Product Management System
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
		</div>
		
		<div id="maincontent">
			<table>
				<tr>
					<td><div id="first" style="height: 190px; width: 600px; border: 2px solid #000000;">
						<h2 align="center">Product page</h2>
						<p>Product page is for managing product information. Assumae like you have a company that buy products
							from several brand company and than cell those products to your local customer. So, when you
							get your products from those company and put those to your store room, you need to save those product's 
							information into your database so that you can check later that if you have those products available or not.
							Product page basically do this job behalf of you. </p>
					</div>
					</td>
					<td><div id="first" style="height: 190px; width: 200px; border: 2px solid #FF6600;">
						<img src="product.jpg" alt="product" height="190" width="200"/>
					</div>
						
					</td>
				</tr>
				
				<tr>
					<td><div id="first" style="height: 190px; width: 600px;border: 2px solid #000000;">
						<h2 align="center">Customer page</h2>
						<p>Customer page is for managing customer informations. Like if a customer order you to buy some product 
							from you. You should have to get customer detail information for further use and also for making invoice.
							You also need to manage those information into database so that at any time you can get those information and 
							use. Customer page do this job for you. </p>
					</div></td>
					<td><div id="first" style="height: 190px; width: 200px;border: 2px solid #FF6600;">
						<img src="customerinfo.gif" alt="product" height="190" width="200"/>
					</div></td>
				</tr>
				
				<tr>
					<td><div id="first" style="height: 190px; width: 600px;border: 2px solid #000000;">
						<h2 align="center">Shipment page</h2>
						<p>Shipment page is for managing shipment information.Like if a customer buy a product from you, you need to 
							save those information into database for later use. Also you will need those information for makin your
							product's invoice.Shipment page do this job for you.It puts all shipment data into database then retrive data 
							from product database table and customer database table, calculates the price of selling products, calculates the 
							tax percentage then finally accumulate all the information and make an invoice for you. </p>
					</div></td>
					<td><div id="first" style="height: 190px; width: 200px; border: 2px solid #FF6600;">
						<img src="shipment.gif" alt="product" height="190" width="200"/>
					</div></td>
				</tr>
				
			</table>
		</div>
		
		<div id="footer">
			<p>© Shamiul Haque</p>
		</div>
		</div>
	</body>
</html>