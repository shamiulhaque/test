<?php
$to = "bappys@hotmail.com";
$subject = "Test mail";
$message = $_GET["S1"];
$from = "sazib_nipa@yahoo.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>


