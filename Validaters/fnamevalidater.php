<?php
session_start();
session_id();

$_SESSION['f_name']="";

$n=$_GET["q"];

	if(is_numeric($n)){
	echo "<img src=\"images/errormsg/wrone.png\" width=\"20\" height=\"20\" /> <font color=\"#FF0000\">Incorrect</font>";
	}	
	
else{
	$_SESSION['f_name']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." ".$n;
	
	
	}
	
?>