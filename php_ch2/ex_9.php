<?php

 //use of break and continue statement
 for ($i=0;$i<100;$i++)
 {
  if ($i%2 == 0)
	  continue;
  else
	  echo "$i   "."<br>";

  if ($i ==51)
	  break;
 }

?>
