<?php
 $cmd=pwd;
 exec(escapeshellcmd($cmd),$output,$status);
 if ($status)
	 echo "command failed";
 else
	 echo "<pre>";
	 foreach($output as $line)
		 
		 echo htmlspecialchars("$line\n");
                 echo "</pre>";

?>
