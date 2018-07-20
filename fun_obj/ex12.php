<?php
 $object1=new User;
 $object1->name="Alice";
 $object2= clone $object1;
 $object2->name="Jack";

 print($object1->name);
 print("<br>");
 print($object2->name);
 class User
 {
	 public $name;
 }
?>
