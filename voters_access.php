<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
session_id();

$errmsg="";
$nic=$_SESSION['nic_no'];



$rid=$_GET['read'];

if($rid=="ok"){
include "connection.php";	
$queryup=mysql_query("UPDATE voters_details SET status='voted' WHERE nic='$nic'");
header("Location: balletPpr.php");	

}

	




if(isset($nic)){
	
	include "connection.php";
	
	$query1=mysql_query("SELECT * FROM voters_details WHERE nic='$nic' AND status='OK'");
	
	while($row=mysql_fetch_array($query1)){
	$appnic=$row['nic'];
	}
	
	
	if(mysql_num_rows($query1)>0){
	
	$link_bllt="<a href=\"voters_access.php?read=ok\">".$appnic."</a>";
	//header("Location: checking_form.php");
	}
}else{
	
	echo "error";
}
?>

<html>
<head>
<!--<meta http-equiv="refresh" content="5"> -->
<title>Voter Access</title>
<style type="text/css">

.btn:hover { background-color:#3CF}

body,td,th {
	color: #900;
}
</style>
<script type="text/javascript" >
function validate(){
	
window.open('balletPpr.php','popup','width=530,height=1000,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=400px,top=150px'); return false;	
	
	
}

</script>



<script>
<!--

/*
Auto Refresh Page with Time script
By JavaScript Kit (javascriptkit.com)
Over 200+ free scripts here!
*/

//enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
var limit="0:05"

if (document.images){
var parselimit=limit.split(":")
parselimit=parselimit[0]*60+parselimit[1]*1
}
function beginrefresh(){
if (!document.images)
return
if (parselimit==1)
window.location.reload()
else{ 
parselimit-=1
curmin=Math.floor(parselimit/60)
cursec=parselimit%60
if (curmin!=0)
curtime=curmin+" minutes and "+cursec+" seconds left until page refresh!"
else
curtime=cursec+" seconds left until page refresh!"
window.status=curtime
setTimeout("beginrefresh()",1000)
}
}

window.onload=beginrefresh
//-->
</script>

</head>

<body>
<table width="329" border="0" align="center">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FC6" align="center"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td width="68">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <form name="LoginForm" action="" method="post">
  <tr>
    <td colspan="3"><blockquote>
      <blockquote>
        <p align="center"><strong>Click the link to access the Election</strong></p>
      </blockquote>
    </blockquote></td>
    </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFCC"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <p align="center"><?php echo $link_bllt; ?></p>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="188">&nbsp;</td>
    <td width="59">&nbsp;</td>
  </tr>
  <tr>
    <td><a onClick="">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
</body>
</html>