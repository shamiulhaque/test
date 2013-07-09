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

$listItems = 5

;

$b = $a % $listItems;

$c = (($a-$b)/$listItems)+1;

$listId = 0;
$i = 0;
$tabId=0;
$count_style = 0;
$count_script = 0;
?>

<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Sortable - Connect lists with Tabs</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  
  <style>
  
 ul {min-height:10px;}
 
  <?php
  while($count_style != $c)
  {
  	$count_style++;
  	echo"#sortable".$count_style." li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; }";
  }

  ?>
  
  
  </style>
  
  
  <script>

$(document).ready(function() {
	
	
$("ul").sortable({
		connectWith: "ul",
		stop: function()
		{	
		var listArray = toArray();
		
		$("#listArray").text(listArray);
		
		var sortItemListArray = sortItemList();
		
		$("#subItemArray").text(sortItemListArray);
		
		}
	});
 
 
	function toArray()
	{
		  var toArray = "";
   		
   			for(var count = 1; count<= <?php echo $c ?>; count++)
    		{
    			var getSerial = "#sortable"+count;
    			
    			toArray  = toArray+ $(getSerial).sortable("toArray")+",";
    		}
			
			return toArray;
	}

 
 function sortItemList()
 {
 		var li = $("#tabs li").length;
 		
		var array = new Array();

		for(var m = 1; m<=li; m++)
		{
			var sortli = "#sortable-"+m;
			
			var sortLiArray = $(sortli).sortable("toArray");
			
			array[m]=new Array(sortLiArray);
			
		}
		
		return array;
 	
 }



	  	
    var $tabs = $( "#tabs" ).tabs();  
    
    var kk = $("#tabs").tabs().length; 
 
    var $tab_items = $( "ol:first li", $tabs ).droppable({
    	
      accept: ".aa li",
      hoverClass: "ui-state-hover",
      drop: function( event, ui ) {
      	
        var $item = $( this );
        var $list = $( $item.find( "a" ).attr( "href" ) )
          .find( ".aa" );
 
 		var i = ui.draggable.closest("div").attr("id");
 		
 		var name = ui.draggable.closest("div").attr("name");
 
        ui.draggable.hide( "slow", function() {
        	
        $tabs.tabs( "option", "active", $tab_items.index( $item ) );
         
         var m = $tab_items.index( $item );  
         
         var ss = m+1;
         
         var kkk = $(this).closest("div").attr("id");
         
          

          var a = $($list).closest("div").attr("id");
          
          var b = "#"+a+" li:last";
          
          var k = "#"+i+" .aa";
          
          if(ss > name){
          	$( this ).prependTo( $list ).show( "slow" );
          }
          else{
          	$( this ).appendTo( $list ).show( "slow" );
          }
        
  if( ss > name )
	{  
		    
for(var foo = ss; foo > 1; foo--)
{
if(foo==ss)
{
	var listItem = "#tabs-"+foo+" li:nth-child(2)";
}
	else{
		
		var listItem = "#tabs-"+foo+" li:first";
	}	
		
		var goTo = "#tabs-"+m+" .aa";
				
		$( listItem ).appendTo( goTo ).show("slow");
		
			m--;
};
	}
	
	else
	{
	
	var count = name;
		
		for(foo=ss; foo <name; foo++)
		{
			
if(foo==ss)
{
	var listItem = "#tabs-"+foo+" li:nth-child(5)";
}
	else{
		
		var listItem = "#tabs-"+foo+" li:last";
	}	
		
		var goTo = "#tabs-"+count+" .aa";
				
			
		$( listItem ).prependTo( goTo ).show("slow");
		
		count++;
			
		}
	}

        });

      }
    });
    
    
  });
  
  
  </script>
  
 
</head>

<body>

 <div id="listArray" style="height: 30px; width: auto; border: 1px solid #000"></div>
 <div id="subItemArray" style="height: 30px; width: auto; border: 1px solid #000"></div>
 
<section id="demo">
	
<div id="tabs">
  <ol>
  	<?php
  	while($i != $c)
  	{
  		$i++;
		$tabId++;
		echo "<li><a href='#tabs-".$tabId."'>Page-".$i."</a></li>";
  	}
  	
  	?>
    
  </ol>
  <?php
  
  $divId = 0;
  $subUlId = 0;
  
  while($divId != $tabId)
  {
  	$divId++;
  	echo "<div id='tabs-".$divId."' name='".$divId."'>";
	
    echo "<ul id='sortable".$divId."' class='aa'>";
  
for($m=0; $m<$listItems; $m++)
{
	if ($row= $result->fetch_row()) {
	$listId++;
	$subUlId++;
		
	echo"<li id ='list_".$listId."' class='ui-state-default'><div>".$row[0];echo"</div>";
	
	echo "<ul id ='sortable-".$subUlId."' class='bb'>

		</ul>";
		
	echo "</li>";
				
}

      	
    }

    	
  echo"</ul>";
  echo"</div>";
  
  }
?>

</section>

</body>
</html>