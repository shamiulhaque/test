<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	</head>
	
	<script>
	$(document).ready(function(){
		
		$( "#main" ).draggable({ containment: "parent" });
	});
	
	</script>

	<body>
		
		<div id="main" style="width: 500px; height: 200px; border: 1px solid #000">
			
			<div id="resizable" style="width: 100px; height: 80px; border: 1px solid #000; background-color: #f02"></div>
			
		</div>
		
		
		
	</body>
</html>