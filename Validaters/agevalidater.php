<?php
session_start();
session_id();

$_SESSION['age']="";

$n=$_GET["q"];

	if(!is_numeric($n)){
		echo "<img src=\"images/errormsg/wrone.png\" width=\"20\" height=\"20\" /> <font color=\"#FF0000\">Incorrect</font>";
	
	}else if($n<=17){
		echo "<img src=\"images/errormsg/warning.png\" width=\"20\" height=\"20\" /> <font>Age > 18</font>";
	}
	
else{
	$_SESSION['age']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." "."Age :".$n;
	
	
	}
	
?>