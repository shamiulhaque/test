<?php
if (isset($_GET['Check_Box_First'])) {
	$CompanyName= "Company Name";
	echo $CompanyName; 
	
    // checkbox has been checked
}
else if (isset($_POST['Check_Box_Second'])) {
	$DoesntExists="Company does not exists";
	echo $DoesntExists; 
	
    // checkbox has been checked
}
//$to = "bappys@hotmail.com";
//$subject = "Test mail";
//$message = $_GET["S1"];
//$from = "sazib_nipa@yahoo.com";
//$headers = "From:" . $from;
//mail($to,$subject,$message,$headers);
//echo "Mail Sent.";
//echo "Name";

?>


