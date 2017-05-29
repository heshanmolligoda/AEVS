<?php
session_start();
session_id();



$n=$_GET["q"];


$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

			if (!preg_match($regexp, $n)) 
			{
			echo "<img src=\"images/errormsg/wrone.png\" width=\"20\" height=\"20\" />";
			
			}else{  
			$_SESSION['email']="true";
			echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />";
			}






	if(is_numeric($n)){
	
	}	
	
else{
	
	
	
	}
	
?>