<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  
  <style>
  .draggable { width: 150px; height: 100px; border:1px solid #ccc; background-color: #CD0A0A}
  #containment-wrapper { width: 800px; height:300px; border:2px solid #000}
  </style>
  
  <script>
  $(function() {
  	
  	var maxH = 298;
  	var maxW = 798;
  	$( "#draggable3" ).resizable({ maxHeight: maxH, maxWidth: maxW});
  	
     $( "#draggable3" ).draggable({ containment: "#containment-wrapper", scroll: false,
     stop: function( event, ui ) {
     	
     	var possition = $("#draggable3").offset();
     	
     	var top = possition.top;
     	var left = possition.left;
     	
     	maxH = 308-top;
     	maxW = 808-left;
     	$( "#draggable3" ).resizable({ maxHeight: maxH, maxWidth: maxW});
     }
      });
     
    
     
  });
  </script>
</head>
<body>
 
</div>
 
<div id="containment-wrapper">
  <div id="draggable3" class="draggable">~~resizable~~</div>
</div>
 
 
</body>
</html>