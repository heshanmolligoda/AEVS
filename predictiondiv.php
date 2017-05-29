<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

session_start();


include "connection.php";

$query1=mysql_query("SELECT * FROM p_pdelection WHERE E_party='United National Party'");
while($row=mysql_fetch_array($query1)){
	
$year98=$row['1998'];
$year04=$row['2004'];
$year10=$row['2010'];	
}

$query2=mysql_query("SELECT * FROM p_pdelection WHERE E_party='United Peoples Freedom Alliance'");
while($row=mysql_fetch_array($query2)){
	
$year98upfa=$row['1998'];
$year04upfa=$row['2004'];
$year10upfa=$row['2010'];;	
}


$query3=mysql_query("SELECT * FROM p_pdelection WHERE E_party='Peoples Liberation Front'");
while($row=mysql_fetch_array($query3)){
	
$year98plf=$row['1998'];
$year04plf=$row['2004'];
$year10plf=$row['2010'];
}


$query4=mysql_query("SELECT * FROM p_pdelection WHERE E_party='Jathika Hela Urumaya'");
while($row=mysql_fetch_array($query4)){
	
$year98jhu=$row['1998'];
$year04jhu=$row['2004'];
$year10jhu=$row['2010'];	
}


$query5=mysql_query("SELECT * FROM p_pdelection WHERE E_party='New Democratic Front'");
while($row=mysql_fetch_array($query5)){
	
$year98ndf=$row['1998'];
$year04ndf=$row['2004'];
$year10ndf=$row['2010'];	
}

$query6=mysql_query("SELECT * FROM p_pdelection WHERE E_party='Sri Lanka Muslim Congress'");
while($row=mysql_fetch_array($query6)){
	
$year98slmc=$row['1998'];
$year04slmc=$row['2004'];
$year10slmc=$row['2010'];	
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="522" border="0" align="center" bordercolor="#FFCC00">
  <tr>
    <td colspan="5" align="center" bgcolor="#FFCC66"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td colspan="5" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">All Island Prediction</font></td>
  </tr>
  <tr>
    <td width="119" align="center" bgcolor="#CCCCCC"><strong>Party</strong></td>
    <td colspan="3" align="center" bgcolor="#CCCCCC"><strong>Previous Election</strong></td>
    <td width="124" align="center" bgcolor="#CCCCCC"><strong>Prediction</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="85" align="center"><strong>1998</strong></td>
    <td width="83" align="center"><strong>2004</strong></td>
    <td width="77" align="center"><strong>2010</strong></td>
    <td align="center"><strong>2012</strong></td>
  </tr>
  <tr>
    <td><img src="images/logo/url.jpg" width="70" height="70" /></td>
    <td align="center"><?php echo $year98 ?></td>
    <td align="center"><?php echo $year04 ?></td>
    <td align="center"><?php echo $year10 ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo floor(($year98+$year04+$year10)/3) ?></td>
  </tr>
  <tr>
    <td><img src="images/logo/url1.jpg" width="70" height="60" /></td>
    <td align="center"><?php echo $year98upfa ?></td>
    <td align="center"><?php echo $year04upfa ?></td>
    <td align="center"><?php echo $year10upfa ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo floor(($year98upfa+$year04upfa+$year10upfa)/3) ?></td>
  </tr>
  <tr>
    <td><img src="images/logo/url2.jpg" width="80" height="70" /></td>
    <td align="center"><?php echo $year98plf ?></td>
    <td align="center"><?php echo $year04plf ?></td>
    <td align="center"><?php echo $year10plf ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo floor(($year98plf+$year04plf+$year10plf)/3) ?></td>
  </tr>
  <tr>
    <td><img src="images/logo/Jhu_logo.jpg" width="75" height="65" /></td>
    <td align="center"><?php echo $year98jhu ?></td>
    <td align="center"><?php echo $year04jhu ?></td>
    <td align="center"><?php echo $year10jhu ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo floor(($year98jhu+$year04jhu+$year10jhu)/3) ?></td>
  </tr>
  <tr>
    <td><img src="images/logo/NDF.jpg" width="70" height="65" /></td>
    <td align="center"><?php echo $year98ndf ?></td>
    <td align="center"><?php echo $year04ndf ?></td>
    <td align="center"><?php echo $year10ndf ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo floor(($year98ndf+$year04ndf+$year10ndf)/3) ?></td>
  </tr>
  <tr>
    <td><img src="images/logo/71176_23324539529_2327541_n.jpg" width="70" height="80" /></td>
    <td  align="center"><?php echo $year98slmc ?></td>
    <td align="center"><?php echo $year04slmc ?></td>
    <td align="center"><?php echo $year10slmc ?></td>
    <td align="center" bgcolor="#FFFFCC"><?php echo floor(($year98slmc+$year04slmc+$year10slmc)/3) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#990000">&nbsp;</td>
  </tr>
</table>
</body>
</html>