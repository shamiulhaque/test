<?php

$con=mysql_connect('localhost','haquabm','haquabm','haquabm');

if(!$con)
{
	die('Error connecting to database: '.mysql_errno().': '.mysql_error());
}

?>