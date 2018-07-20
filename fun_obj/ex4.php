<?php

$a1="KANAV";
$a2="ARUN";
$a3="ANJALI";

echo $a1." ".$a2." ".$a3." <br>";
fix_names($a1,$a2,$a3);
echo $a1." ".$a2." ". "$a3";

function fix_names(&$n1,&$n2,&$n3)
{
   $n1=ucfirst(strtolower($n1));
   $n2=ucfirst(strtolower($n2));
   $n3=ucfirst(strtolower($n3));
}

?>
