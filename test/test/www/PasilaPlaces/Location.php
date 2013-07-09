<?php
$myFile = "textfile.txt";
$fh = fopen($myFile, 'w') or die("cant open file");
$stringData = "Bobby Bopper\n";
fwrite(@fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);
?>