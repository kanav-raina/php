<?php
 echo "<pre>";
 printf("The result is $%15f\n",123.42 / 12); //pad to 15 spaces
 printf("The result is $%015f\n",123.42 / 12);//pad to 15 spaces fill 0
 printf("The result is $%15.2f\n",123.42 / 12);//pad to 15 spaces 2 decimal precision
 printf("The result is $%015.2f\n",123.42 / 12);//pad to 15 spaces 2 decimal precision fill with 0s
 printf("The result is $%#15.2f\n",123.42 / 12);
 
?>
