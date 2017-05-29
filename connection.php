
<?php

	$link = mysql_connect("localhost","root","8246") or die("Couldn't connect to host".mysql_error());
	$db = mysql_select_db("oes",$link) or die("Couldn't connect the the DB".mysql_error());
	
	
?>