<?php
$f=fopen("kanav.txt",'r') or die("file does not exist or you lack permission");
$line=fgets($f);
fclose($f);
echo $line;


?>
