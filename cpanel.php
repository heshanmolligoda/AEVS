<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
session_id();

$logout=$_GET['read'];
if($logout=="logout"){

unset($_SESSION['user']);
header ("Loacation: cpanel.php");	
	
}


if(!isset($_SESSION['user'])){

header ("Location: login.php");

}else{




}

?>
<html>
<head>
<title>cpanel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (cpanel.psd) -->
<table id="Table_01" width="601" height="401" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="18" background="images/cpanel_01.png">
			</td>
		<td>
			<img src="images/spacer.gif" width="1" height="98" alt=""></td>
	</tr>
	<tr>
		<td colspan="18" background="images/cpanel_02.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cpanel.php?read=logout"><font color="#FFFFFF">Log Out</font></a>
			</td>
		<td>
			<img src="images/spacer.gif" width="1" height="26" alt=""></td>
	</tr>
	<tr>
		<td colspan="18">
			<img src="images/cpanel_03.gif" width="600" height="15" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="15" alt=""></td>
	</tr>
	<tr>
		<td rowspan="12">
			<img src="images/cpanel_04.gif" width="7" height="261" alt=""></td>
		<td colspan="3">
			<img src="images/cpanel_05.png" width="15" height="87" alt=""></td>
		<td><a href="voters_registration.php"><img src="images/cpanel_06.png" alt="" width="73" height="87" border="0"></a></td>
		<td colspan="3"><a href="e_officer_registration.php"><img src="images/cpanel_07.png" alt="" width="92" height="87" border="0"></a></td>
		<td colspan="2"><a href="candidate_registration.php"><img src="images/cpanel_08.png" alt="" width="93" height="87" border="0"></a></td>
		<td rowspan="12">
			<img src="images/cpanel_09.gif" width="38" height="261" alt=""></td>
		<td rowspan="5">
			<img src="images/cpanel_10.gif" width="9" height="122" alt=""></td>
		<td rowspan="3"><a href="genaral_result.php"><img src="images/cpanel_11.png" alt="" width="90" height="106" border="0"></a></td>
		<td rowspan="3">
			<img src="images/cpanel_12.gif" width="1" height="106" alt=""></td>
		<td rowspan="3"><a href="PDcount.php"><img src="images/cpanel_13.png" alt="" width="86" height="106" border="0"></a></td>
		<td rowspan="3"><a href="candidateVote.php"><img src="images/cpanel_14.png" alt="" width="78" height="106" border="0"></a></td>
		<td rowspan="5">
			<img src="images/cpanel_15.gif" width="9" height="122" alt=""></td>
		<td rowspan="12">
			<img src="images/cpanel_16.gif" width="9" height="261" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="87" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="4">
			<img src="images/cpanel_17.png" width="14" height="35" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="images/cpanel_18.png" width="74" height="20" alt=""></td>
		<td>
			<img src="images/cpanel_19.png" width="1" height="1" alt=""></td>
		<td colspan="2" rowspan="2">
			<img src="images/cpanel_20.png" width="91" height="19" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="images/cpanel_21.png" width="93" height="20" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/cpanel_22.png" width="1" height="34" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="18" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/cpanel_23.png" width="91" height="16" alt=""></td>
		<td colspan="4" rowspan="3">
			<img src="images/cpanel_24.png" width="255" height="23" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/cpanel_25.png" width="74" height="15" alt=""></td>
		<td colspan="2">
			<img src="images/cpanel_26.png" width="93" height="15" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="15" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="images/cpanel_27.gif" width="273" height="7" alt=""></td>
		<td rowspan="2">
			<img src="images/cpanel_28.gif" width="9" height="8" alt=""></td>
		<td>
			<img src="images/cpanel_29.gif" width="9" height="7" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="7" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="images/cpanel_30.png" width="11" height="122" alt=""></td>
		<td colspan="5" rowspan="3"><a href="PDprediction.php"><img src="images/cpanel_31.png" alt="" width="83" height="93" border="0"></a></td>
		<td rowspan="3">
			<img src="images/cpanel_32.png" width="86" height="93" alt=""></td>
		<td rowspan="2"><a href="predictiondiv.php"><img src="images/cpanel_33.png" alt="" width="82" height="92" border="0"></a></td>
		<td rowspan="5">
			<img src="images/cpanel_34.png" width="11" height="122" alt=""></td>
		<td colspan="2">
			<img src="images/cpanel_35.gif" width="91" height="1" alt=""></td>
		<td colspan="3" rowspan="4">
			<img src="images/cpanel_36.png" width="173" height="111" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/cpanel_37.gif" width="9" height="121" alt=""></td>
		<td colspan="2" rowspan="3"><a href="Diatrictcount.php"><img src="images/cpanel_38.png" alt="" width="91" height="110" border="0"></a></td>
		<td>
			<img src="images/spacer.gif" width="1" height="91" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/cpanel_39.png" width="82" height="30" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" rowspan="2">
			<img src="images/cpanel_40.png" width="169" height="29" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="18" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2">
			<img src="images/cpanel_41.gif" width="264" height="21" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="11" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="images/cpanel_42.gif" width="273" height="10" alt=""></td>
		<td>
			<img src="images/cpanel_43.gif" width="9" height="10" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="10" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="73" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="86" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="82" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="38" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="90" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="86" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="78" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="9" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>