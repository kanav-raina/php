<?php
 $object=new User("KANAV","RAINA");
 print_r($object);
 class User
 {
	 public $name,$password;
	 function save_user()
	 {
		 echo "Save user code goes here";
	 }
 }
?>
