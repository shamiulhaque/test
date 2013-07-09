<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>

body
{
background:radial-gradient(circle at 100% 50%, transparent 20%, #800080 21%, #800080 34%, transparent 35%, transparent), radial-gradient(circle at 0% 50%, transparent 20%, #800080 21%, #800080 34%, transparent 35%, transparent) 0 -50px;
background-color:#FF6600;
background-size:75px 100px;
}

#main
{
	min-height:800px;
	width:800px;
	margin-left:auto;
	margin-right:auto;
	background-color:#fff;
	padding-top:30px;
}
.colorDiv
{
	height:auto;
	width:auto;
	border:1px solid #ff0000;
}
.positionSlider, .transperancySlider, .bcProperty
{
	width:150px;
}
.inputlll
{
	float:left;
}
</style>

<script>
	$(function(){
    //all the slider's dynamic value getter
    $( ".positionSlider, .transperancySlider, .bcProperty" ).slider({
      range: "max",
      min: 1,
      max: 100,
      value: 1,
      slide: function( event, ui ) {
        $( this ).val( ui.value );
         sliderId = $(this).prop("id");
         valId = "#"+sliderId+"_val";
         $( valId ).val( $( "#"+sliderId ).slider( "value" ) );
      }
    });

$("#mainDiv_1_colorDiv_1_button").click(function(){
	
	//var btId = $(this).prop("id");
	//$("#mainDiv_1_bcWidth_1_val").val(btId);
	
	/*var dynamicId = 5;
	
	
	var id1 = "a1";
	var id2 = "a2";
	var id3 = "a3";
	var id4 = "a4";
	var id5 = "a5";*/
	
	var id = "5";
	var dat = "id="+id;

$.post('11.php',dat,function(data) {
  $("#mainDiv_1_cnoleDivTaker").append(data);
});
				/*$.post({
  				type: "POST",
  				url: "11.php",
  				data: dat,
  				async: false, 
  				success: function(responce)
  				{
  					alert(responce);					  				
  				}
  			    )};*/
	
				/*var divStart= "<div id='"+id1+"' class='colorDiv'>";
				
				var labelForColor = "<label>color 2:</label>";
				var inputForColor = "<input id='"+id2+"' type='text' value='#ff0000'/><br><br>";

				var labelForTransperant = "<label>Transperant:</label>";
				var dpForTransperant = "<select id='"+id3+"'><option value='yes'>YES</option><option value='no'>NO</option></select><br><br>";
							
				var labelForTransperancy = "<label>Transperancy:</label>";
				var inputForTransperancy = "<div id='"+id4+"' class='transperancySlider'></div>";
				var InputValueForTransperancy = "<input type='text' id='"+id5+"' />";
							
				var divEnd = "</div>";
				
				
				var appendItem = divStart+labelForColor+inputForColor+labelForTransperant+dpForTransperant+labelForTransperancy+inputForTransperancy+InputValueForTransperancy+divEnd;
	
	$("#mainDiv_1_cnoleDivTaker").append(appendItem);
	
	
	/*var btDivId = $("#"+btId).parent("div").prop("id");
	
	var cloneItemHolder = $("#"+btDivId).parent("div").prop("id");
	
	var numberString = btDivId.replace("mainDiv_1_colorDiv_", " ");
	
	var numberInt = parseInt(numberString)+1;
	
	var newBtId = "mainDiv_1_colorDiv_"+numberInt+"_button";
	var newDivId = "mainDiv_1_colorDiv_"+numberInt;
	
	var cloneItem = $("#"+btDivId).clone(true);
	
	
	cloneItem.find("button").attr("id",newBtId);
	
	cloneItem.find("#"+btDivId).attr("id",newDivId);
	
	$("#"+cloneItemHolder).append(cloneItem);

	alert(btId);*/
});



})
</script>
  		
</head>

	<body>
		
		
		<div id="main" class="something" style="background: white">
			
			<div id="mainDiv_1">
				
			<label>H position:</label>
			<div id="mainDiv_1_Hposition_1" class="positionSlider"></div>
  <input type="text" id="mainDiv_1_Hposition_1_val" style="border: 0; color: #f6931f; font-weight: bold;" /><br><br>
			
			<label>V position:</label>
			<div id="mainDiv_1_Vposition_1" class="positionSlider"></div>		
  <input type="text" id="mainDiv_1_Vposition_1_val" style="border: 0; color: #f6931f; font-weight: bold;" /><br><br>
			
			<label>Shape:</label>
			<select id="mainDiv_1_shape_1">
				<option value="circle">Circle</option>
				<option value="ellipse">Ellipse</option>
			</select><br><br>
			
			<label>Size:</label>
			<select id="mainDiv_1_size_1">
				<option value="circle">cover</option>
				<option value="ellipse">something</option>
			</select><br><br>
			
			<label>color 1:</label>
			<input id="mainDiv_1_color_1" type="text" value="#ff9900"/><br><br>
			
			<label>Transperant:</label>
			<select id="mainDiv_1_color_1_Transperanct_1">
				<option value="yes">YES</option>
				<option value="no">NO</option>
			</select><br><br>
			
			<label>Transperancy:</label>
			<div id="mainDiv_1_color_1_Transperancy_1" class="transperancySlider"></div>
			<input type="text" id="mainDiv_1_color_1_Transperancy_1_val" style="border: 0; color: #f6931f; font-weight: bold;" /><br><br>

			
					<div id="mainDiv_1_cnoleDivTaker" class="cnoleDivTaker">
								
					<div id="mainDiv_1_colorDiv_1" class="colorDiv">
									
							<label>color 2:</label>
							<input id="mainDiv_1_color_2" type="text" value="#ff0000"/><br><br>
							
							<label>Transperant:</label>
							<select id="mainDiv_1_color_2_Transperanct_1">
								<option value="yes">YES</option>
								<option value="no">NO</option>
							</select><br><br>
							
							<label>Transperancy:</label>
							<div id="mainDiv_1_color_2_Transperancy_1" class="transperancySlider"></div>
							<input type="text" id="mainDiv_1_color_2_Transperancy_1_val" />
				
	
						</div>
				
						</div>
					
					<button id="mainDiv_1_colorDiv_1_button" class="button">Clone</button>	
								
				<label>BC Height:</label>
				<div id="mainDiv_1_bcHeight_1" class="bcProperty"></div>
				<input id="mainDiv_1_bcHeight_1_val"></input><br><br>
				
				<label>BC Width:</label>
				<div id="mainDiv_1_bcWidth_1" class="bcProperty"></div>
				<input id="mainDiv_1_bcWidth_1_val"></input><br><br>
			
			</div>
			
		</div>
		
		
	</body>
</html>