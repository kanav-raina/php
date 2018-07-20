<?php
 class test
 {
	 static $static_property="I am static";
	 function get_sp()
	 {
		 return self::$static_property;
	 }
 }

 $temp=new Test();
 echo test::$static_property;
 echo $temp->get_sp();
 echo $temp->static_property;

?>
