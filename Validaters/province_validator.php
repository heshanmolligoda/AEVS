<?php
session_start();
session_id();



$n=$_GET["q"];

	if($n==true){
	$_SESSION['province']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />";
	
	
	}
	
?>