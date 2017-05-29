<?php
session_start();
session_id();

$_SESSION['a_l2']="";

$n=$_GET["q"];


	$_SESSION['a_l2']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." ".$n;
	
	
	
	
?>