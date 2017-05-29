<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
session_id();

$logout=$_GET['read'];
if($logout=="logout"){

unset($_SESSION['user']);
header ("Loacation: checking_form.php");	
	
}


if(!isset($_SESSION['user'])){

header ("Location: login.php");

}else{

include "connection.php";

$eofficer=$_SESSION['user'];

$queryeofcr=mysql_query("SELECT * FROM e_officers_details WHERE nic='$eofficer'");
while($row=mysql_fetch_array($queryeofcr)){
	
$eofcrprovince=$row['province'];
$eofcrdistrict=$row['distric'];	
$eofcrpdivision=$row['p_division'];
$eofcrpstation=$row['p_station'];
	
}


if(isset($_POST['sub'])){
	
	include "connection.php";
	
	
	if($_SESSION['nic']!="true"){
		
	$msg="NIC is Invalid";	
		
	}else{
	unset($_SESSION['nic']);
	$_SESSION['nic_no']=$_POST['nic'];
	$nic=$_SESSION['nic_no'];
	
	$query1=mysql_query("SELECT * FROM voters_details WHERE nic='$nic' AND province='$eofcrprovince' AND distric='$eofcrdistrict' AND p_division='$eofcrpdivision' AND p_station='$eofcrpstation' AND status='Not_Ok'");
	
	if(mysql_num_rows($query1)>0){
	
	while($row=mysql_fetch_assoc($query1))
	{	
	$fname=$row['f_name'];
	$lname=$row['l_name'];
	$usernic=$row['nic'];
	
	$_SESSION['province']=$row['province'];
	$_SESSION['p_station']=$row['p_station'];
	$_SESSION['district']=$row['distric'];
	$_SESSION['p_div']=$row['p_division'];
	}
	
		
	$dic=$_SESSION['district'];
	$p_div=$_SESSION['p_div'];
	$p_stn=$_SESSION['p_station'];
		
	}else{
		
	$msg="<font color=\"#990000\">Invalide Elector</font>";	
		
		}
	
	}

}
}

?>
<?php 

if(isset($_POST['ok'])){
	include "connection.php";
	$nic=$_SESSION['nic_no'];
	$query2=mysql_query("UPDATE voters_details SET status='OK' WHERE nic='$nic'");
	
	if(mysql_affected_rows()>0){
	//header("Location: che.php");
	}else{
	
	$msg="Error";
	}

	
	
}



?>

<html>
<head>

<script type="text/javascript">

function nicValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("nic").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("nic").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/nicvalidater.php?q="+str,true);
xmlhttp.send();
}

</script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Voter</title>
<style type="text/css">

.btn:hover { background-color:#3CF}

</style>
</head>

<body>
<table width="449" border="0" align="center">
  <tr>
    <td colspan="3" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" bgcolor="#CCCCCC"><font color="#990000" size="+2"><strong>Parliament Election 2012</strong></font></td>
  </tr>
  <tr>
    <td colspan="3"><font color="#666666" size="+1"><?php echo $eofcrprovince." "."Province"; ?></font></td>
  </tr>
  <tr>
    <td colspan="3"><font color="#666666" size="+1"><?php echo $eofcrdistrict." "."District"; ?></font></td>
  </tr>
  <tr>
    <td colspan="3"><font color="#666666" size="+1"><?php echo $eofcrpdivision." "."Polling Division"."-".$eofcrpstation." "."Polling Station"; ?></font></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC" align="right">
 
            <a href="checking_form.php?read=logout"><font color="#990000" size="+1">Logout&nbsp;</font></a>
    </td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FC6" align="center"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <form name="form1" method="post" action="">
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td width="79">&nbsp;</td>
    <td colspan="2"><label>
<input name="nic" type="text" id="textfield2" onKeyUp="nicValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="10">
    </label>
      <input class="btn" type="submit" name="sub" id="button" value="Search" />
      <input type="submit" name="ok" id="button2" value="OK"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><label><span class="style16" id="nic"></span></label></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">NIC :</td>
    <td bgcolor="#FFFFCC"><?php echo $usernic ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">Name :</td>
    <td bgcolor="#FFFFCC"><?php echo $fname." ".$lname; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">Distric :</td>
    <td bgcolor="#FFFFCC"><?php echo $dic; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td width="122" bgcolor="#FFFFCC">Polling Division :</td>
    <td width="212" bgcolor="#FFFFCC"><?php echo $p_div; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">Polling Station :</td>
    <td bgcolor="#FFFFCC"><?php echo $p_stn; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><font color="#990000"><?php echo $msg; ?></font></td>
    </tr>
  </form>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
</body>
</html>