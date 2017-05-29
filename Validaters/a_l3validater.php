<?php
session_start();
session_id();

$_SESSION['a_l3']="";

$n=$_GET["q"];


	$_SESSION['a_l3']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." ".$n;
	
	
	
	
?>