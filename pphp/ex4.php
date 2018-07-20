<?php
 $f=fopen("kanav.txt",'w') or die("Failed to create file ^_^");
 $text="Hello there my name is Kanav Raina";
 fwrite($f,$text) or die("couldn't write to file");
 fclose($f);
 echo "file written successfully";

?> 
