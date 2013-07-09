<?php
    function randomString ($length)
{
	$strings = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	$stringCount = strln($strings);
	$stringCount--;
	
	$hash = null;
	
	for($x = 1; $x <= $length; $x++)
	{
		$get = rand(0,$stringCount);
		$hash .= substr($strings,$get,1);
	}
	
	return $hash;
}

$rand = randomString(30);
echo $rand;
?>