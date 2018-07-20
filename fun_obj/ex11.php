<?php
 $object=new User;
 print_r($object);
 echo "<br>";

 $object->name="Kanav Raina";
 $object->password="Arun Raina";
 $object->save_user();
 print_r($object);

 class User
 {
	 public $name,$password;
	 function save_user()
	 {
		 echo "Save User code goes here ";
	 }
 }

?>
