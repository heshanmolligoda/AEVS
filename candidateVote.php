<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
$errmsg="";

	$province=$_POST['province'];
	$district=$_POST['district'];
	$epty=$_POST['party'];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Candidate count</title>
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
    <td>Party</td>
    <td><select name="party" id="party" size=1>
      <option>Select your party..
      
      <?php
        
		include "connection.php";
		
		$party=mysql_query("SELECT DISTINCT E_party FROM vote");
		while($row=mysql_fetch_array($party)){
		for($i=1; $i<=count($party); $i++){
			
		echo "<option value=\"".$row['E_party']."\">".$row['E_party']."</option>";	
		}
		}
		
		?>
      </select></td>
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


</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table width="600" border="0" align="center" bgcolor="#FFFF99">
<tr bgcolor="#FFFFCC">
 
	<td width="200" align="center">CANDITATE</td>
    <td width="177" align="center">VOTES OBTAINED</td>
    <td width="191" align="center">PERCENTAGE</td>
</tr>

<?php 

if(isset($_POST['sub'])){
	
	include "connection.php";
	/*Select candidates_details.`f_name`,candidates_details.`l_name`,candidate_vote.`candidate_no` FROM candidates_details,candidate_vote WHERE candidate_vote.`candidate_no`=candidates_details.`candidate_no`*/
	
	$query=mysql_query("SELECT candidates_details.f_name,candidates_details.l_name,count(candidate_vote.vote_count) as cnt, TRUNCATE((count(candidate_vote.vote_count) / (SELECT count(candidate_no) FROM candidate_vote)) * 100,2) as pcnt 
	FROM candidate_vote,candidates_details 
	WHERE candidate_vote.distric='$district' AND 
		candidate_vote.province='$province' AND 
		candidate_vote.vote_count=1 AND 
		candidate_vote.E_party='$epty' AND
		 candidate_vote.E_party=candidates_details.E_party AND
		candidates_details.candidate_no=candidate_vote.candidate_no 
	GROUP BY candidate_vote.candidate_no ORDER BY count(candidate_vote.vote_count) DESC");
	while($row=mysql_fetch_array($query)){

		for($i=1; $i<=count($query); $i++){
	
	echo "<tr>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row['f_name']." ".$row['l_name']."</td>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row['cnt']."</td>";
	echo "<td bgcolor=\"#EBEBEB\" align=\"center\">".$row['pcnt']."%"."</td>";
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

include "connection.php";
$values=array();

$query=mysql_query("SELECT candidates_details.f_name,count(candidate_vote.vote_count) as cnt 
	FROM candidate_vote,candidates_details 
	WHERE candidate_vote.distric='$district' AND 
		candidate_vote.province='$province' AND 
		candidate_vote.vote_count=1 AND 
		candidate_vote.E_party='$epty' AND
		 candidate_vote.E_party=candidates_details.E_party AND
		candidates_details.candidate_no=candidate_vote.candidate_no 
	GROUP BY candidate_vote.candidate_no");
	while($row=mysql_fetch_array($query)){

		for($i=1; $i<=count($query); $i++){
	
	$values[$row['f_name']]=$row['cnt'];
	
	}
}

	$_SESSION['cval']=$values;
	
?>




<table width="300" border="0" align="center">

	<tr><td><font color="#990000" size="+1">Summery</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="grp2.php?read=ok"><font color="#FF9900">Graphical view</font></a></td></tr>
    
</table>


<?php
if(isset($_POST['sub'])){
	
	include "connection.php";
	
	$query2=mysql_query("SELECT count(vote_count) as cunt FROM candidate_vote WHERE distric='$district' AND province='$province' AND vote_count=1");
	while($row=mysql_fetch_array($query2)){
		$cunt=$row['cunt'];
	}
	
	$query3=mysql_query("SELECT count(rejectVote) as rcunt FROM candidate_vote WHERE distric='$district' AND province='$province' AND rejectVote=1");
	while($row=mysql_fetch_array($query3)){
		$rcunt=$row['rcunt'];
	}
	
$query4=mysql_query("SELECT count(indexv) as ttl FROM candidate_vote WHERE distric='$district' AND province='$province'");
	while($row=mysql_fetch_array($query4)){
		$ttl=$row['ttl'];
	}
	
$query5=mysql_query("SELECT count(nic) as ttlvotes FROM voters_details WHERE distric='$district' AND province='$province'");
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
<table width="300" border="0" align="center" bgcolor="#FFCC00">
<tr bgcolor="#EBEBEB">
 
	<td width="150" align="center" bgcolor="#FFCC00">Valid Votes</td>
    <td width="125" align="center"><?php echo $cunt ?></td>
    <td width="125" align="center"><?php echo $percentage1."%"; ?></td>
</tr>
<tr bgcolor="#EBEBEB">
 
	<td width="150" align="center" bgcolor="#FFCC00">Rejected Votes</td>
    <td width="125" align="center"><?php echo $rcunt ?></td>
    <td width="125" align="center"><?php echo $percentage2."%"; ?></td>
</tr>
<tr bgcolor="#EBEBEB">
 
	<td width="150" align="center" bgcolor="#FFCC00">Total Polled </td>
    <td width="125" align="center"><?php echo $ttl ?></td>
    <td width="125" align="center"><?php echo $percentage3."%"; ?></td>
</tr>
<tr bgcolor="#EBEBEB">
 
	<td width="150" align="center" bgcolor="#FFCC00">Regis.Electors</td>
    <td width="125" align="center"><?php echo $ttlvotes ?></td>
    <td width="125" align="center"></td>
</tr>
</table>


</body>
</html>