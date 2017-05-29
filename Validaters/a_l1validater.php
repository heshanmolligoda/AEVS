<?php
session_start();
session_id();

$_SESSION['a_l1']="";

$n=$_GET["q"];


	$_SESSION['a_l1']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." ".$n;
	
	
	
	
?>