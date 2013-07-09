<?php
$con = new mysqli("localhost", "haquabm", "a1234567", "haquabm");

if(mysqli_connect_errno())
{
	printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
}

$query = 'SELECT email FROM customer';
$result = $con->query($query) or die($con->error());

$count = 'SELECT COUNT(email) AS totall FROM customer';
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
  		
  		$(".tabInvalid").hide();
  		
  		$("#bt").click(function(){
  			var t = 0;
  			var tabId = "";
  			var id = "";
  			var mail = "";
 			var data = "";
 			
  			for(var count = 1; count < 11; count++ )
  			{
  				tabId = "#tab_"+count;
  				id ="#mail_"+count;
  				mail = $(id).text();
  				data = "mail="+mail+"&tab="+tabId;

  				$.ajax({
  				type: "POST",
  				url: "6.php",
  				data: data,
  				async: false, 
  				success: function(responce)
  				{
  					$(responce).css("background", "green");
										  				
  				},
  			});			 				 								
				
	
  			};


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
	{
		$validMail = "";
		$invalidMail = "";
		$mail = $row[0];
		
		/*if()
		{
			$validMail = $mail;
		}	
		else
		{
			$invalidMail = $mail;
		}*/
		?>
		
		<table>
			<tr id="tr">
				<td id=<?php echo $c; ?> class="tab"></td>
				<td id=<?php echo $b; ?> class="mail"><?php echo $row[0]; ?></td>
			</tr>
			<tr>
				<td id=""<?php //echo $c; ?> class="tabInvalid"></td>
				<td id=""<?php //echo $b; ?> class="tabInvalid"><?php //echo $row[0]; ?>sami</td>
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

