<?php
 class Translate
 {
	 const ENGLISH=0;
	 const SPANISH=1;
	 const HINDI=2;
	 const ARABIC=3;
 
         static function lookup()
         {
	     echo self::SPANISH;
         }
 }
 Translate::lookup();

?>
