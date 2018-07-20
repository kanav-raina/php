<?php
 //reading a file with fread
$f=fopen("kanav.txt",'r') or die("file doesn't exist or you lack permission");  $line=fread($f,3);
fclose($f);
echo $line;


?>
