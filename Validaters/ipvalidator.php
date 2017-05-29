<?php
session_start();
session_id();

$_SESSION['nic']="";

$n=$_GET["q"];



  //first of all the format of the ip address is matched
  if(preg_match("/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/",$n))
  {
    //now all the intger values are separated
    $parts=explode(".",$n);
    //now we need to check each part can range from 0-255
    foreach($parts as $ip_parts)
    {
      if(intval($ip_parts)>255 || intval($ip_parts)<0)
      return false; //if number is not within range of 0-255
    }
    $_SESSION['ip']="true";
	echo "<img src=\"images/errormsg/correct.png\" width=\"20\" height=\"20\" />"." ".$n;
  }
  else
    echo "<img src=\"images/errormsg/warning.png\" width=\"20\" height=\"20\" /> <font color=\"#666666\">Ex :- 128.17.55.67 </font>";



	
?>