<?php

 class Dad
 {
	 function test()
	 {
		 echo "DAD CLASS<br>";
	 }
 }
 class Son extends Dad
 {
	 function test()
	 {
		 echo "SON CLASS <br>";
	 }
	 function test2()
	 {
		 parent::test();
	 }
 }
 $object=new Son;
 $object->test();
 $object->test2();

?>
