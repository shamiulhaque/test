<?php
$con = new mysqli("localhost", "haquabm", "a1234567", "haquabm");

if(mysqli_connect_errno())
{
	printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

$query = 'SELECT id FROM customer';
$result = $con->query($query) or die($con->error());

$count = 'SELECT COUNT(id) AS totall FROM customer';
$resultCount = $con->query($count) or die($con->error());
$totall = $resultCount->fetch_assoc();
$a= $totall['totall'];
?>




<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  
  <style>
  	.mail
  	{
  		border: 1px solid #000;
  		width: 80px;
  	}
  	.tab
  	{
  		border: 1px solid #000;
  		width: 20px;
  	}
  </style>
  
  <script>
  	$(document).ready(function(){
  		$("#bt").click(function(){
  			
  			var show = "";
  			
  			for(var count = 1; count < 10; count++ )
  			{
  				var id ="#mail_"+count;
  				var a = $(id).text();
  				var data = "a="+a;
  				$.post("6.php", data, function(responce){
  					
  				//how =show+responce+"</br>";
  					("#tr").html(responce);
  				});
  				
  				
  			}
  	
  			
  			
  		});
  		

  	});
  </script>
  
  
</head>
<body>
<div id="main">	
<?php
$a = 0;
for($m=0; $m < 10; $m++)
{
	$a++;
	$b = '"mail_'.$a.'"';
	$c = '"tab_'.$a.'"';
	if($row= $result->fetch_row())
	{?>
		<table>
			<tr id="tr">
				<td id=<?php echo $c; ?> class="tab"></td>
				<td id=<?php echo $b; ?> class="mail"><?php echo $row[0]; ?></td>
			</tr>
		</table>




<?php
	}
}
 
?>	
</div>
<button id="bt">Send</button>

</body>
</html>