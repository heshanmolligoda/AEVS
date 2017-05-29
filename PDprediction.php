<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
$errmsg="";

	$province=$_POST['province'];
	$district=$_POST['district'];
	$p_div=$_POST['p_division'];
	
	$_SESSION['province']=$_POST['province'];
	$_SESSION['district']=$_POST['district'];
	$_SESSION['p_division']=$_POST['p_division'];
	

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Polling Division Count</title>
<style type="text/css">

.btn:hover { background-color:#3CF}

</style>


<script type="text/javascript" src="js/list_menu.js">
</script>

<script type="text/javascript" src="js/polling_dev.js">
</script>


</head>

<body>
<table width="375" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFFF"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td width="123">&nbsp;</td>
    <td colspan="2">Counting votes</td>
  </tr>
  <form name="LoginForm" action="" method="post">
  <tr>
    <td>&nbsp;</td>
    <td width="182">&nbsp;</td>
    <td width="87">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Province</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
      <select name="province" id="provinceabc" size=1 onChange="changeList(this),gif2Validate(this.value)" onBlur="provinceValidate(this.value),disableAdd(this.form,this.value)">
        <option>Select your Province..
          <option value="Central">Central
            <option value="Eastern">Eastern
            <option value="North Central">North Central
            <option value="North Western">North Western
            <option value="Northern">Northern
            <option value="Sabaragamuwa">Sabaragamuwa
            <option value="Southern">Southern
            <option value="Uva">Uva 
            <option value="Western">Western
          </select>
      <span id="province"></span></label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Distric</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
      <select name="district" id="districtabc" size=1 onChange="changeList2(this),gif3Validate(this.value)" onBlur="districtValidate(this.value),disableAdd(this.form,this.value)">
        <option>Select your District..
          
        </select>
      <span id="district"></span></label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Polling Division</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
      <select name="p_division" id="p_divisionabc" size=1 onChange="gif3Validate(this.value)"  onBlur="pdivisionValidate(this.value)">
        <option>Select your polling Division..
          
        </select>
      <span id="p_division"></span></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sub" id="button" value="Submit"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table width="300" border="0" align="center">

	<tr><td><font color="#990000" size="+1"><?php echo "-".$province." "."Province";?></font> </td></tr>
    <tr><td><font color="#990000" size="+1"><?php echo "-".$district." "."District";?></font></td></tr>
    <tr><td><font color="#990000" size="+1"><?php echo "-".$p_div." "."Polling Division";?></font></td></tr>


</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table width="600" border="0" align="center" bgcolor="#FFFF99">
<tr bgcolor="#FFFFCC">
 
	<td width="200" align="center">ELECTION PARTY</td>
    <td width="177" align="center">1998</td>
    <td width="191" align="center">2004</td>
    <td width="191" align="center">2010</td>
    <td width="191" align="center">2012</td>
</tr>

<?php 

if(isset($_POST['sub'])){
	
	include "connection.php";
	
	
	$query=mysql_query("SELECT* FROM p_election WHERE distric='$district' AND p_division='$p_div' AND province='$province'");
	while($row=mysql_fetch_array($query)){

		for($i=1; $i<=count($query); $i++){
	
	echo "<tr>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row["E_party"]."</td>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row['1998']."</td>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row['2004']."</td>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row['2010']."</td>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".floor(($row['1998']+$row['2004']+$row['2010'])/3)."</td>";
	echo "</tr>";	
	}

}
}
?>


</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if(isset($_POST['sub'])){
	
	include "connection.php";
	
	$query2=mysql_query("SELECT count(vote_count) as cunt FROM vote WHERE distric='$district' AND p_division='$p_div' AND province='$province' AND vote_count=1");
	while($row=mysql_fetch_array($query2)){
		$cunt=$row['cunt'];
	}
	
	$query3=mysql_query("SELECT count(rejectVote) as rcunt FROM vote WHERE distric='$district' AND p_division='$p_div' AND province='$province' AND rejectVote=1");
	while($row=mysql_fetch_array($query3)){
		$rcunt=$row['rcunt'];
	}
	
$query4=mysql_query("SELECT count(indexv) as ttl FROM vote WHERE distric='$district' AND p_division='$p_div' AND province='$province'");
	while($row=mysql_fetch_array($query4)){
		$ttl=$row['ttl'];
	}
	
$query5=mysql_query("SELECT count(nic) as ttlvotes FROM voters_details WHERE distric='$district' AND p_division='$p_div' AND province='$province'");
	while($row=mysql_fetch_array($query5)){
		$ttlvotes=$row['ttlvotes'];
	}
	
	
	if($ttl==0 || $ttlvotes==0){
		
	}else{
	$percentage1=round(($cunt/$ttl)*100,2);
	$percentage2=round(($rcunt/$ttl)*100,2);
	$percentage3=round(($ttl/$ttlvotes)*100,2);
	}
	
	
}
?>
</body>
</html>