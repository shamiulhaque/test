<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Flagging Page</title>
    <style type="text/css">
        #TextArea1
        {
            height: 101px;
            width: 360px;
        }
        #Text_Area_For_The_Form
        {
            width: 270px;
        }
    </style>
</head>
<script type='text/javascript'
   src='http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js'></script>
    <script type='text/javascript'>
      function countChar(val){
     var len = val.value.length;
     if (len >= 100) {
              val.value = val.value.substring(0, 100);
     } else {
              $('#charLeft').text(100 - len);
     }
};
        
        
        function contact(){
        	document.getElementById("contactDiv").style.display="inherit";
        	document.getElementById("Contact").style.display="none";
        };
        
    </script>
<body>
        <h2>Change Information</h2>

<form action="Email.php" >
    <p style="margin-left: 120px">
        <input name="Check_Box_First" type="checkbox" />Name of the Company</p>

<p style="margin-left: 120px">
        <input name="Check_Box_Second" type="checkbox" />Comapny does not exists</p>

    <p style="margin-left: 120px">
        <input name="Check_Box_Third" type="checkbox" />Opening Hours</p>

<p style="margin-left: 120px">
        <input name="Check_Box_Fourth" type="checkbox" />Contact Information</p>
    <p style="margin-left: 120px"></p>

    <p style="margin-left: 120px">
    	
        <input id="Submit1" type="submit" value="submit" /></p>
        <div id="contactDiv" style="display: none">
			<p style="margin-left: 120px">
        <textarea rows= "4" cols="20" id="TA1" name="S1" maxlength = "100" onkeyup="countChar(this)"></textarea></p>
		<span id="charLeft"> </span>  Characters left
		</div>
       
		</form>
        
        <div id="Contact" style="display: inherit">
          <button name="Contact" onclick= "contact()">Contact me</button>
        </div>
</body>
</html>
