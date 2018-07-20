<?php
 
function fun($a,$b,$c)
{
        $a=ucfirst(strtolower($a));
	$b=ucfirst(strtolower($b));
	$c=ucfirst(strtolower($c));
	return $a." "."$b"." "."$c"." ";
}

$var=fun("kanav","ROHIT","RAHUl");
echo $var;


?>
