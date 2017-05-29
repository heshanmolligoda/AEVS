<?php
session_start();
session_id();

$_SESSION['nic']="";

$n=$_GET["q"];

if(preg_match ("/^([0-9]{9})([V|v|X|x])$/",$n)){

	$_SESSION['nic']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." ".$n;
	}
	
else if(!is_numeric($n)){
	echo "<img src=\"images/errormsg/wrone.png\" width=\"20\" height=\"20\" /> <font color=\"#FF0000\">Incorrect NIC</font>";
	}
	
else{
	
	echo "<img src=\"images/errormsg/warning.png\" width=\"20\" height=\"20\" /> <font color=\"#666666\">Ex :- 808676546 V</font>";
	}
	
?>