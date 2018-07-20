<?php
 echo "<pre>";
 $h="Rasmus";

 printf("[%s]\n",$h);
 printf("[%12s]\n",$h);
 printf("[%-12s]\n",$h);
 printf("[%012s]\n",$h);
 printf("[%#12s]\n",$h);

 $d="KanavRaina";
 printf("[%12.8s]\n",$d);
 printf("[%-12.12s]\n",$d);

?>
