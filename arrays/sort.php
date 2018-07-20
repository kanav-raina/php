<?php
$array[0]=3;
$array[1]=6;
$array[2]=1;
$array[3]=5;
sort($array);
print_r( $array);

echo "<br>";
$c=count($array);
echo "the number of elements in array is $c<br>";


shuffle($array);
print_r($array);


echo '<br>';
echo (is_array($array))? "is an array" : "not an array";


?>
