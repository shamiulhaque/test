<!DOCTYPE html>
<html>
	<head>
		<script src="jquery-1.9.1.js"></script>
  <script src="jquery-ui-1.10.1.custom.js"></script>
  
  <link rel="stylesheet" href="jquery-ui-1.10.1.custom.css" />
  
		<script>
			$(document).ready(function(){
				
				
				$("input").datepicker();
				
			});
		</script>
		
	</head>
	
	
	<body>
		<form action="welcome.php" method="post">
		<input type="text" id="datepicker" name="datepicker"/>
		<input type="submit" />
		</form>
	</body>
	
	
	
	
	
	
	
	
	
</html>