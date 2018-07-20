<?php
 $object=new Subscriber;
 $object->name="Fred";
 $object->password="pword";
 $object->phone="01962-259149";
 $object->email="kanavraina123@gmail.com";
 $object->display();
 

 class User
 {
	 public $name,$password;
	 function save_user()
	 {
		 echo "Save User Code goes here";
	 }
 }

 class Subscriber extends User
 {
	 public $phone,$email;
	 function display()
	 {
		 echo "NAME : ".$this->name ." <br>";
		 echo "PASS : ".$this->password."<br>";
		 echo "PHONE : ".$this->phone."<br>";
		 echo "EMAIL : ".$this->email;
	}
 }


?>
