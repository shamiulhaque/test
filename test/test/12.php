<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Sortable - Display as grid</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
  
  #sortable1 { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #sortable1 li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
  
  #smallDiv
  {
  	border:1px solid #000000;
  	height:300px;
  	width:500px;
  	/*display:none;*/
  	margin-top:10px;
  }
  
  .sortable_li
  {
  	height:10px;
  }
  
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    
    $( "#sortable1" ).sortable();
    $( "#sortable1" ).disableSelection();
  });
  </script>
</head>
<body>
 
<div style="height:200px; border: 1px solid #000000">
<ul id="sortable">
  <li class="ui-state-default">1</li>
  <li class="ui-state-default" style="width:200px">2</li>
  <li class="ui-state-default">3</li>
</ul>
</div>

<div id="smallDiv">
	
	<ul id="sortable1">
	  <li class="sortable_li ui-state-default" style="height:20px">1</li>
	  <li class="sortable_li ui-state-default">2</li>
	  <li class="sortable_li ui-state-default">3</li>
	</ul>
	
</div>
 
 
</body>
</html>