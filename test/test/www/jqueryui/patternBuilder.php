<!DOCTYPE html>
<html>
	<title></title>
	<head>
		    <link rel="stylesheet" href="easyPattern/jquery-ui-1.10.3.custom.css" />
  			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  			<script src="jquery.slides.min.js"></script>
  			<link rel="stylesheet" href="jquery-miniColors-master/jquery.minicolors.css" />
  			<script src="jquery-miniColors-master/jquery.minicolors.js"></script>

	</head>
	
<style>
	
body
	{
		width: auto;
		height:100%;
		margin:auto;
	}
input
{
	background:url(../images/ui-bg_highlight-soft_35_222222_1x100.png);
	color:#ffffff;
}
p
{
	float:left;
	margin-right:10px;
}
.label
{
	float:left;
	margin-right:10px;
}
		
.slider
{
	width:200px;
	z-index: 1;
	float:left;
	margin-top:3px;
	margin-left:12px;
	margin-right:15px;
}
.val
{
	float:left;
	margin-top:2px;
	margin-left:3px;
}
.slider_val
{
	float:left;
}
.divSize
{
	width:405px;
	height:30px;
}
.degree
{
	width:415px;
	height:30px;
}
.input
{
	width:25px;
	border:none;
}
.inputDegree
{
	width:32px;
	border:none;
}
.wraper
{
	border:1px solid #E0EAEA;
	width:425px;
	padding-top:5px;
	padding-left:5px;
	margin-bottom:3px;
}
.cssShow
{
	height:100px;
	width:400px;
	margin-top:2px;
}
.cssShowLn
{
	height:100px;
	width:400px;
	margin-top:2px;
}
.preview
{
	height:218px;
	width:450px;
	border:1px solid #000000;
	margin-top:5px;
	margin-bottom:8px;
	margin-left:2px;
}
.previewLn
{
	height:219px;
	width:450px;
	border:1px solid #000000;
	margin-top:5px;
	margin-bottom:8px;
	margin-left:2px;
}
#radio
{
	float:left;
	
}
#css
{
	float:left;
}
.cssRadio
{
	height:40px;
	border:1px solid transparent;
}
.ui-button-text
{
	font-size:12px !important;
}
.radio
{
	margin-top:7px;
}
#tabs
{
 width:443px;
 height:auto;
 font-size:13px;
 float:left;
 margin-left:5px;
}
#tabs1
{
	padding:7px;
	
}
#tabs2
{
	padding:7px;
}
#main
{
	width:920px;
	margin-left:auto;
	margin-right:auto;
	background:#aaaaaa;
	border:1px solid #000000;
}
.header
{
	width: 910px;
	height:60px;
	margin-bottom:5px;
	background: linear-gradient(to bottom, #7d7e7d 0%,#0e0e0e 100%);
	border-bottom:1px solid #000000;
	text-align:center;
	color:#FFFFFF;
	margin-left:auto;
	margin-right:auto;
	margin-top:5px;
	
}
.footer
{
	width: 920px;
	height:25px;
	border-top:1px solid #000000;
	margin-top:5px;
	background: linear-gradient(to bottom, #7d7e7d 0%,#0e0e0e 100%);

}
.right
{
	float:right;
	font-size:12px;
	color:#ffffff;
	margin-top:5px;
	margin-right:5px;
}
.tabWraper
{
	min-height:861px;
}
.pic_slider
{
	width:450px;
	height:800px;
	float:right;
	margin-right:10px;
}
.carousel
{
	width:450px;
	height:198px;
	border:1px solid #000000;
	margin-bottom:10px;
	margin-left:2px;
}
.demo
{
	height:20px;
}
.demo label
{
	font-size:18px;
}
.demoLabel
{
	margin-bottom:3px;
}
.text
{
	font-size:55px;
}
#slides {
      display:none;
    }	
</style>
	
<script>
	$(function(){
		
		$("#slides").slidesjs({
        width: 400,
        height: 177,
        navigation: {
      	active: false
    },
     pagination: {
      active: false,
    },
     play: {
      active: false,
      effect: "fade",
      interval: 6000,
      auto: true,
      swap: false,
      pauseOnHover: true,
      restartDelay: 2500
     },
     effect: {
      fade: {
        speed: 3000,
        crossfade: true
      }
    }  
      });
		
		$("body").css("background-color","#000000");
		
		$("#Shape").on("change",function(){
			accumulateValue();
		});
		
		$("#position").on("change",function(){
			accumulateValue();
		});
		
		$("#tabs").tabs();
		$( "#radio" ).buttonset();
 		$( "#radioBG" ).buttonset();
 		$( "#radioRepet" ).buttonset();
 		
 		$(".cssShow").hide();
 		
 		$("#radio1").click(function(){
 			$(".cssShow").show("blind",1000);
 		});
 		$("#radio2").click(function(){
 			
 			$(".cssShow").hide("blind",1000);
 		});
 		
 		$("#radio3").click(function(){
 			$("#radio3").attr("checked","true");
 			$("#radio4").removeAttr("checked");
 			
 			$("#radio9").removeAttr("checked");
 			$("#radio10").attr("checked","true");
			$( "#radio9" ).button( "refresh" );
 			accumulateValue();
 		});
 		
 		$("#radio4").click(function(){
 			$("#radio4").attr("checked","true");
 			$("#radio3").removeAttr("checked");
 			accumulateValue();
 		});
 		
 		$("#radio5").click(function(){
 			$("#radio5").attr("checked","true");
 			$("#radio6").removeAttr("checked");
 			accumulateValue();
 		});
 		
 		$("#radio6").click(function(){
 			$("#radio6").attr("checked","true");
 			$("#radio5").removeAttr("checked");
 			accumulateValue();
 		});
 		
 		
		miniColor("start_color","color1","","radial");
		miniColor("stop_color_1","color2","","radial");
		miniColor("stop_color_2","color3","","radial");
		miniColor("bgColor","color6","true","radial");
		
		Slider("shape_h_position_slider",0,100,"radial");
		Slider("shape_v_position_slider",0,100,"radial");
		Slider("start_color_trnsp",0,500,"radial");
		Slider("start_color_interval",0,100,"radial");
		Slider("stop_color_1_interval",0,100,"radial");
		Slider("stop_color_2_interval",0,100,"radial");
		Slider("stop_color_1_trnsp",0,500,"radial");
		Slider("stop_color_2_trnsp",0,500,"radial");
		Slider("h_position",0,100,"radial");
		Slider("v_position",0,100,"radial");
		Slider("bg-height",0,500,"radial");
		Slider("bg-width",0,500,"radial");
		
		accumulateValue();
		accumulateValueForLinear();
		
		/*------------------------------- for linear --------------------------------*/
		
		 $("#radioBGLn").buttonset();
		 $("#radioCss").buttonset();
		 $("#radioRepetLn").buttonset();
		 $(".cssShowLn").hide();
		 
		 $("#radio11").click(function(){
 			$(".cssShowLn").show("blind",1000);
 		});
 		$("#radio12").click(function(){
 			
 			$(".cssShowLn").hide("blind",1000);
 		});
		 
		 $("#radio7").click(function(){
		 	$("#radio7").attr("checked","true");
		 	$("#radio8").removeAttr('checked');
		 	accumulateValueForLinear();
		 });
		 
		  $("#radio8").click(function(){
		 	$("#radio8").attr("checked","true");
		 	$("#radio7").removeAttr('checked');
		 	accumulateValueForLinear();
		 });
		 
		 $("#radio9").click(function(){
		 	$("#radio9").attr("checked",true);
		 	$("#radio10").removeAttr('checked')
		 	
		 	$("#radio4").attr("checked",true);
		 	$("#radio3").removeAttr('checked')
		 	
		 	$("#radio3").button("refresh");
		 	accumulateValueForLinear();
		 });
		 
		  $("#radio10").click(function(){
		 	$("#radio10").attr("checked",true);
		 	$("#radio9").removeAttr('checked')
		 	accumulateValueForLinear();
		 });
		 
		
		miniColor("bgColor_linear","color7","true","lineal");
		miniColor("start_color_linear","","true","lineal");
		miniColor("stop_color_1_linear","","true","lineal");
		miniColor("stop_color_2_linear","","true","lineal");
		miniColor("stop_color_3_linear","","true","lineal");
		
		Slider("degree_slider",-180,180,"lineal");
		Slider("start_color_linear_interval",0,100,"lineal");
		Slider("stop_color_1_linear_interval",0,100,"lineal");
		Slider("stop_color_2_linear_interval",0,100,"lineal");
		Slider("stop_color_3_linear_interval",0,100,"lineal");
		Slider("start_color_linear_trnsp",0,100,"lineal");
		Slider("stop_color_1_linear_trnsp",0,100,"lineal");
		Slider("stop_color_2_linear_trnsp",0,100,"lineal");
		Slider("stop_color_3_linear_trnsp",0,100,"lineal");
		
		Slider("bg-height_ln",0,500,"lineal");
		Slider("bg-width_ln",0,500,"lineal");
		
		$(".preview").css("background-color","#000000");
		$(".previewLn").css("background-color","#000000");
		
		function accumulateValueForLinear()
		{
			var deg = 	$("#degree_slider_val").val()+"deg,";
			var color1 = $("#start_color_linear").val()+" "+$("#start_color_linear_interval_val").val()+"%, transparent "+$("#start_color_linear_trnsp_val").val()+"%, ";
			var color2 = $("#stop_color_1_linear").val()+" "+$("#stop_color_1_linear_interval_val").val()+"%, transparent "+$("#stop_color_1_linear_trnsp_val").val()+"%, ";
			var color3 = $("#stop_color_2_linear").val()+" "+$("#stop_color_2_linear_interval_val").val()+"%, transparent "+$("#stop_color_2_linear_trnsp_val").val()+"%, ";
			var color4 = $("#stop_color_3_linear").val()+" "+$("#stop_color_3_linear_interval_val").val()+"%, transparent "+$("#stop_color_3_linear_trnsp_val").val()+"%";
			var bgPos = $("#bg-height_ln_val").val()+"px "+$("#bg-width_ln_val").val()+"px";
			
			var radioCheckStatus = $("#radio7").prop("checked");
			
			if(radioCheckStatus == true)
			{
				 var cssLn = "repeating-linear-gradient("+deg+color1+color2+color3+color4+")";
			}
			else
			{
				var cssLn = "linear-gradient("+deg+color1+color2+color3+color4+")";
			}
			
			
			 var bgColorLn = $("#color7").val();
			 var bgLn = bgPos;

			$(".previewLn").css("background",cssLn);
			$(".previewLn").css("background-color",bgColorLn);
			$(".previewLn").css("background-size",bgLn);
			
			var checkBgRadioStatus = $("#radio9").prop("checked");
			
			if(checkBgRadioStatus == true)
			{
			$("body").css("background",cssLn);
			$("body").css("background-color",bgColorLn);
			$("body").css("background-size",bgLn);
			}
			else
			{
				$("body").css("background","#000000");
			}
			
			$(".cssShowLn").html("background: "+cssLn+"; <br>"+"background-color: "+bgColorLn+"; <br>"+"background-size: "+bgLn+";");
		};
		
		
		
		
		//all the common functions are here 
		function miniColor(colorInoutId,valueOutputId,opacity,gradient)
		{
			var color = "#"+colorInoutId;
			var value = "#"+valueOutputId;
			
			$(color).minicolors({
				opacity:opacity,
				change:function()
				{
					$(value).val($(color).minicolors("rgbaString"));
					switch(gradient)
					{
						case"radial":
						accumulateValue();
						break;
						
						case"lineal":
						accumulateValueForLinear();
						break;
					};

				}
			});
			
		}
		
		function Slider(sliderDivId,min,max,gradient)
		{
			var a = "#"+sliderDivId;
			var b= "#"+sliderDivId+"_val";
			
			$(a).slider({
				min:min,
				max:max,
				slide:function(event,ui)
				{
					$(b).val(ui.value);
					switch(gradient)
					{
						case"radial":
						accumulateValue();
						break;
						
						case"lineal":
						accumulateValueForLinear();
						break;
					};
				}
			});	
		}
		
		function accumulateValue()
		{
			 
			 var checkStatusForRepeat = $("#radio5").prop("checked");
			 if(checkStatusForRepeat == true)
			 {
			 	 var bg = "repeating-radial-gradient("+$("#Shape").val()+" "+$("#position").val()+" at "+$("#shape_h_position_slider_val").val() +"%"+" "+$("#shape_v_position_slider_val").val()+"%, "+$("#start_color").val()+" "+$("#start_color_interval_val").val()+"px, transparent "+$("#start_color_trnsp_val").val()+"px, "+$("#stop_color_1").val()+" "+$("#stop_color_1_interval_val").val()+"px, transparent "+$("#stop_color_1_trnsp_val").val()+"px) "+$("#h_position_val").val()+"px "+$("#v_position_val").val()+"px";
			 }
			 else
			 {
			 	 var bg = "radial-gradient("+$("#Shape").val()+" "+$("#position").val()+" at "+$("#shape_h_position_slider_val").val() +"%"+" "+$("#shape_v_position_slider_val").val()+"%, "+$("#start_color").val()+" "+$("#start_color_interval_val").val()+"px, transparent "+$("#start_color_trnsp_val").val()+"px, "+$("#stop_color_1").val()+" "+$("#stop_color_1_interval_val").val()+"px, transparent "+$("#stop_color_1_trnsp_val").val()+"px) "+$("#h_position_val").val()+"px "+$("#v_position_val").val()+"px";
			 }


			 var bgSize = $("#bg-height_val").val()+"px "+$("#bg-width_val").val()+"px";
			 var bdColor =  $("#color6").val();
			
			var checkStatusForBody = $("#radio3").prop("checked");
			if(checkStatusForBody == true)
			{
				$("body").css("background",bg);
				$("body").css("background-color",bdColor);
				$("body").css("background-size",bgSize);
			}
			else
			{
				$("body").css("background","#000000");
			}	

			$(".preview").css("background",bg);
			$(".preview").css("background-color",bdColor);
			$(".preview").css("background-size",bgSize);

			$(".cssShow").html("background: "+bg+"; <br>"+"background-color: "+bdColor+"; <br>"+"background-size: "+bgSize+";");

		};


});
</script>	

	<body>
				
<div id="main">
	
	<div class="header">
		the <span class="text">
				<span style="color: #0066FF">P</span><span>A</span><span>T</span><span>T</span><span>E</span><span>R</span><span style="margin-right:-13px;color: #0066FF">N</span>
			</span>builder 
	</div>
	
<div class="tabWraper">
	
	<div id="tabs">
  <ul>
    <li><a href="#tabs1">Radial Gradient</a></li>
    <li><a href="#tabs2">Linear Gradient</a></li>
  </ul>
		<div id="tabs1">
<div class="wraper">
			<div class="divSize">
				<label for="bgColor" class="label">Background color:</label>
				<input id="bgColor" value="#ffffff"/>
			</div>
</div>
<div class="wraper">
			<div class="Shape divSize">
				<label for="Shape" class="label">Shape:</label>
					<select id="Shape">
					<option value="circle">Circle</option>
					<option value="ellipse">Ellipse</option>
				</select>
			</div>
			
			<div class="position divSize">
				<label for="position" class="label">Position:</label>
				<select id="position">
					<option value="closest-side">Closest-side</option>
					<option value="closest-corner">Closest-corner</option>
					<option value="farthest-side">Farthest-side</option>
					<option value="farthest-corner">Farthest-corner</option>
					<option value="contain">Contain</option>
					<option value="cover">Cover</option>
				</select>
			</div>
</div>
<div class="wraper">			
			<div class="horizontal divSize">
				<label for="shape_h_position_slider" class="label">Shape-H-position:</label>
				<div id="shape_h_position_slider" class="slider"></div>
				<div class="slider_val">
					<input id="shape_h_position_slider_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
		
			
			<div class="vartical divSize">
				<label for="shape_v_position_slider" class="label">Shape-V-position:</label>
				<div id="shape_v_position_slider" class="slider"></div>
				<div class="slider_val">
					<input id="shape_v_position_slider_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>
<div class="wraper">
			<div class="color divSize">
				<label for="start_color" class="label">Start color:</label>
				<input id="start_color" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="start_color_interval" class="label">Interval:</label>
				<div id="start_color_interval" class="slider"></div>
				<div class="slider_val">
					<input id="start_color_interval_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="start_color_trnsp" class="label">Transparency:</label>
				<div id="start_color_trnsp" class="slider"></div>
				<div class="slider_val">
					<input id="start_color_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
</div>		
<div class="wraper">	
			<div class="color divSize">
				<label for="stop_color_1" class="label">Stop color:</label>
				<input id="stop_color_1" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="stop_color_1_interval" class="label">Interval:</label>
				<div id="stop_color_1_interval" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_1_interval_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="stop_color_1_trnsp" class="label">Transparency:</label>
				<div id="stop_color_1_trnsp" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_1_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
</div>	
<!--
<div class="wraper">		
			<div class="color divSize">
				<label for="stop_color_2" class="label">Stop color 2:</label>
				<input id="stop_color_2" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="stop_color_2_interval" class="label">Interval:</label>
				<div id="stop_color_2_interval" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_2_interval_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="stop_color_2_trnsp" class="label">Transparency:</label>
				<div id="stop_color_2_trnsp" class="slider"></div>
				<div class="slider_val">
				<input id="stop_color_2_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>	
-->
<div class="wraper">		
				<div class="horizontal divSize">
				<label for="h_position" class="label">H-position:</label>
				<div id="h_position" class="slider"></div>
				<div class="slider_val">
					<input id="h_position_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
			
			<div class="vartical divSize">
				<label for="v_position" class="label">V-position:</label>
				<div id="v_position" class="slider"></div>
				<div class="slider_val">
					<input id="v_position_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>		
<div class="wraper">		
			<div class="bg-height divSize">
				<label for="bg-height" class="label">BG-height:</label>
				<div id="bg-height" class="slider"></div>
				<div class="slider_val">
					<input id="bg-height_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
			
			<div class="bg-width divSize">
				<label for="bg-width" class="label">BG-width:</label>
				<div id="bg-width" class="slider"></div>
				<div class="slider_val">
					<input id="bg-width_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
</div>
	
<div class="wraper">
	<div class="cssRadio" >
		<p id="css">Gradient repeat:</p>	
		<div id="radioRepet" class="radioRepet radio">
		    <input type="radio" id="radio5" name="radioRepet" class="radioInput"  checked="checked" value="0" /><label for="radio5">YES</label>
		    <input type="radio" id="radio6" name="radioRepet" class="radioInput" value="1" /><label for="radio6">NO</label>
	  	</div>
	
	</div>
</div>

<div class="wraper">
	<div class="cssRadio">
		<p id="css">Live on background:</p>	
		<div id="radioBG" class="radio">
		    <input type="radio" id="radio3" name="radioBG" class="radioInput" /><label for="radio3">YES</label>
		    <input type="radio" id="radio4" name="radioBG" class="radioInput" checked="checked" /><label for="radio4">NO</label>
	  	</div>
	
	</div>
</div>
	
<div class="wraper">
	<div class="cssRadio">
		<p id="css">Css:</p>	
		<div id="radio" class="radio">
		    <input type="radio" id="radio1" name="radio" class="radioInput" /><label for="radio1">Show</label>
		    <input type="radio" id="radio2" name="radio" class="radioInput" checked="checked" /><label for="radio2">Hide</label>
	  	</div>
	
	</div>
		
	<div class="cssShow"></div>
</div>	

		</div> <!-- End of tabs1 -->
		
		<div id="tabs2"> <!-- Start of tabs2 -->
			
			<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
			<!-- XXXXXXXXXXXXXXXXX LINEAR XXXXXXXXXXXXXXXXXXXXX -->
			<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<div class="wraper">
			<div class="divSize">
				<label for="bgColor_linear" class="label">Background color:</label>
				<input id="bgColor_linear" value="#ffffff"/>
			</div>
</div>

<div class="wraper">			

			<div class="degree">
				<label for="degree_slider" class="label">Position(Dergee):</label>
				<div id="degree_slider" class="slider"></div>
				<div class="slider_val">
					<input id="degree_slider_val" class="input inputDegree" value="0"/>
				</div>
				<div class="val">deg</div>
			</div>
</div>

<div class="wraper">
			<div class="color divSize">
				<label for="start_color_linear" class="label">Start color:</label>
				<input id="start_color_linear" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="start_color_linear_interval" class="label">Interval:</label>
				<div id="start_color_linear_interval" class="slider"></div>
				<div class="slider_val">
					<input id="start_color_linear_interval_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="start_color_linear_trnsp" class="label">Transparency:</label>
				<div id="start_color_linear_trnsp" class="slider"></div>
				<div class="slider_val">
					<input id="start_color_linear_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>

<div class="wraper">
			<div class="color divSize">
				<label for="stop_color_1_linear" class="label">Stop color:</label>
				<input id="stop_color_1_linear" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="stop_color_1_linear_interval" class="label">Interval:</label>
				<div id="stop_color_1_linear_interval" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_1_linear_interval_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="stop_color_1_linear_trnsp" class="label">Transparency:</label>
				<div id="stop_color_1_linear_trnsp" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_1_linear_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>

<div class="wraper">
			<div class="color divSize">
				<label for="stop_color_2_linear" class="label">Stop color:</label>
				<input id="stop_color_2_linear" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="stop_color_2_linear_interval" class="label">Interval:</label>
				<div id="stop_color_2_linear_interval" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_2_linear_interval_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="stop_color_2_linear_trnsp" class="label">Transparency:</label>
				<div id="stop_color_2_linear_trnsp" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_2_linear_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>

<div class="wraper">
			<div class="color divSize">
				<label for="stop_color_3_linear" class="label">Stop color:</label>
				<input id="stop_color_3_linear" value="#ffffff"/>
			</div>
			
			<div class="interval divSize">
				<label for="stop_color_3_linear_interval" class="label">Interval:</label>
				<div id="stop_color_3_linear_interval" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_3_linear_interval_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
			
			<div class="transperancy divSize">
				<label for="stop_color_3_linear_trnsp" class="label">Transparency:</label>
				<div id="stop_color_3_linear_trnsp" class="slider"></div>
				<div class="slider_val">
					<input id="stop_color_3_linear_trnsp_val" class="input" value="0"/>
				</div>
				<div class="val">%</div>
			</div>
</div>
	
<div class="wraper">		
			<div class="bg-height divSize">
				<label for="bg-height_ln" class="label">BG-width:</label>
				<div id="bg-height_ln" class="slider"></div>
				<div class="slider_val">
					<input id="bg-height_ln_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
			
			<div class="bg-width divSize">
				<label for="bg-width_ln" class="label">BG-height:</label>
				<div id="bg-width_ln" class="slider"></div>
				<div class="slider_val">
					<input id="bg-width_ln_val" class="input" value="0"/>
				</div>
				<div class="val">px</div>
			</div>
</div>


<div class="wraper">
	<div class="cssRadio" >
		<p class="css">Gradient repeat:</p>	
		<div id="radioRepetLn" class="radioRepet radio">
		    <input type="radio" id="radio7" name="radioRepetLn" class="radioInput"  checked="checked" value="0" /><label for="radio7">YES</label>
		    <input type="radio" id="radio8" name="radioRepetLn" class="radioInput" value="1" /><label for="radio8">NO</label>
	  	</div>
	
	</div>
</div>

<div class="wraper">
	<div class="cssRadio">
		<p class="css">Live on background:</p>	
		<div id="radioBGLn" class="radio">
		    <input type="radio" id="radio9" name="radioBGLn" class="radioInput" /><label for="radio9">YES</label>
		    <input type="radio" id="radio10" name="radioBGLn" class="radioInput" checked="checked" /><label for="radio10">NO</label>
	  	</div>
	
	</div>
</div>
	
<div class="wraper">
	<div class="cssRadio">
		<p class="css">Css:</p>	
		<div id="radioCss" class="radio">
		    <input type="radio" id="radio11" name="radioCss" class="radioInput" /><label for="radio11">Show</label>
		    <input type="radio" id="radio12" name="radioCss" class="radioInput" checked="checked" /><label for="radio12">Hide</label>
	  	</div>
	
	</div>
		
	<div class="cssShowLn"></div>
</div>
			
		</div> <!-- End of tabs2 -->
		
	</div> <!-- End of tabs -->
		
		<div class="pic_slider">
			<div class="demo demoLabel"><label>Demos</label></div>
			<div class="carousel">
				
  <div id="slides">
    <img src="photo/image5.png">
    <img src="photo/image2.png">
    <img src="photo/image16.png">
    <img src="photo/image18.png">
    <img src="photo/image3.png">
    <img src="photo/image8.png">
    <img src="photo/image12.png">
    <img src="photo/image17.png">
    <img src="photo/image6.png">
    <img src="photo/image10.png">
    <img src="photo/image9.png">
    <img src="photo/image1.png">
    <img src="photo/image4.png">
    <img src="photo/image13.png">
    <img src="photo/image7.png">
    <img src="photo/image11.png">
    <img src="photo/image14.png">
    <img src="photo/image15.png">
  </div>
				
			</div>
			
			<div class="demo"><label>Preview(Radial)</label></div>
			<div class="preview "></div>
			
			<div class="demo"><label>Preview(Linear)</label></div>
			<div class="previewLn "></div>
			
		</div>
	
 </div> <!-- End of tabwraper -->
		
<input id="color6" class="hiddenInput" value="rgba(255, 255, 255, 1)" style="display: none"/>
<input id="color7" class="hiddenInput" value="rgba(255, 255, 255, 1)" style="display: none"/>
	
	<div class="footer">
		<label class="right">Powered by: A.B.M.Shamiul Haque</label>
	</div>
	
</div> <!-- End of main -->

	</body>
</html>