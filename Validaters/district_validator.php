<?php
session_start();
session_id();



$n=$_GET["q"];

	if($n==""){
	echo "<img src=\"images/errormsg/warning.png\" width=\"20\" height=\"20\" />";
	}else{
	$_SESSION['district']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />";
	}
?>