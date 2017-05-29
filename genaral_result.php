<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();


include "connection.php";

$query1=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE E_party='United National Party' GROUP BY E_party");
while($row=mysql_fetch_array($query1)){
	
$finalcountunp=$row['cnt'];	
}

$query2=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE E_party='United Peoples Freedom Alliance' GROUP BY E_party");
while($row=mysql_fetch_array($query2)){
	
$finalcountupfa=$row['cnt'];	
}

$query3=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE E_party='Peoples Liberation Front' GROUP BY E_party");
while($row=mysql_fetch_array($query3)){
	
$finalcountplf=$row['cnt'];	
}

$query4=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE E_party='Jathika Hela Urumaya' GROUP BY E_party");
while($row=mysql_fetch_array($query4)){
	
$finalcountjhu=$row['cnt'];	
}

$query5=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE E_party='New Democratic Front' GROUP BY E_party");
while($row=mysql_fetch_array($query5)){
	
$finalcountndf=$row['cnt'];	
}

$query6=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE E_party='Sri Lanka Muslim Congress' GROUP BY E_party");
while($row=mysql_fetch_array($query6)){
	
$finalcountslmc=$row['cnt'];	
}



$query7=mysql_query("SELECT count(indexv) as cnt FROM vote");
while($row=mysql_fetch_array($query7)){
	
$finaltotalVote=$row['cnt'];	
}


$unpper=round(($finalcountunp/$finaltotalVote)*100,2);
$upfaper=round(($finalcountupfa/$finaltotalVote)*100,2);
$plfper=round(($finalcountplf/$finaltotalVote)*100,2);
$jhuper=round(($finalcountjhu/$finaltotalVote)*100,2);
$ndfper=round(($finalcountndf/$finaltotalVote)*100,2);
$slmcper=round(($finalcountslmc/$finaltotalVote)*100,2);


// seat calculation----------------------------------------------------------------------------------------------------------------
$query8=mysql_query("SELECT count(nic) as cnt FROM voters_details");
while($row=mysql_fetch_array($query8)){
	
$regvoters=$row['cnt'];	
}


$query9=mysql_query("SELECT count(vote_count) as cnt FROM vote WHERE vote_count=1");
while($row=mysql_fetch_array($query9)){
	
$validevote=$row['cnt'];	
}

$x=$finaltotalVote/160;

$y=$regvoters/$x;

$z=floor($validevote/$y);

$seatsforunp=floor($finalcountunp/$z);
$seatsforupfa=floor($finalcountupfa/$z);
$seatsforuplf=floor($finalcountplf/$z);
$seatsforjhu=floor($finalcountjhu/$z);
$seatsforndf=floor($finalcountndf/$z);
$seatsforslmc=floor($finalcountslmc/$z);



$r1=$finalcountunp%$z;
$r2=$finalcountupfa%$z;
$r3=$finalcountplf%$z;
$r4=$finalcountjhu%$z;
$r5=$finalcountndf%$z;
$r6=$finalcountslmc%$z;


$totalr=$r1+$r2+$r3+$r4+$r5+$r6;


//End seat------------------------------------------------------------------------------------------------------------------------

//summery---------------------------------------------------------------------------------------------------------------------
include "connection.php";
	
	$query9=mysql_query("SELECT count(vote_count) as cunt FROM vote WHERE vote_count=1");
	while($row=mysql_fetch_array($query9)){
		$cunt=$row['cunt'];
	}
	
	$query10=mysql_query("SELECT count(rejectVote) as rcunt FROM vote WHERE rejectVote=1");
	while($row=mysql_fetch_array($query10)){
		$rcunt=$row['rcunt'];
	}
	
$query4=mysql_query("SELECT count(indexv) as ttl FROM vote");
	while($row=mysql_fetch_array($query4)){
		$ttl=$row['ttl'];
	}
	
$query5=mysql_query("SELECT count(nic) as ttlvotes FROM voters_details");
	while($row=mysql_fetch_array($query5)){
		$ttlvotes=$row['ttlvotes'];
	}
	
	
	if($ttl==0 || $ttlvotes==0){
		
	}else{
	$percentage1=round(($cunt/$ttl)*100,2);
	$percentage2=round(($rcunt/$ttl)*100,2);
	$percentage3=round(($ttl/$ttlvotes)*100,2);
	}
	


//---------------------------------------------------------------------------------------------------------------------------






?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="650" height="355" border=1" align="center" bordercolor="#FFFF99">
  <tr>
    <td colspan="7" align="center" bgcolor="#FFCC66"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#990000"><font color="#FFFFFF"><em><strong>ELECTION RESULTS (All Island)</strong></em></font></td>
  </tr>
  <tr>
    <td width="141"><blockquote>
      <h3>&nbsp;</h3>
    </blockquote></td>
    <td width="108" align="center"><img src="images/logo/url.jpg" width="68" height="60" /></td>
    <td width="100" align="center"><img src="images/logo/url1.jpg" width="68" height="60" /></td>
    <td width="100" align="center"><img src="images/logo/url2.jpg" width="68" height="60" /></td>
    <td width="100" align="center"><img src="images/logo/Jhu_logo.jpg" width="68" height="60" /></td>
    <td width="92" align="center"><img src="images/logo/NDF.jpg" width="68" height="60" /></td>
    <td align="center"><img src="images/logo/71176_23324539529_2327541_n.jpg" width="68" height="60" /></td>
  </tr>
  <tr>
    <td><strong>VOTES OBTAINED</strong></td>
    <td><blockquote>
      <p><?php echo $finalcountunp ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $finalcountupfa ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $finalcountplf ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $finalcountjhu ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $finalcountndf ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $finalcountslmc ?></p>
    </blockquote></td>
  </tr>
  <tr>
    <td><strong>PERCENTAGE</strong></td>
    <td><blockquote>
      <p><?php echo $unpper."%"; ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $upfaper."%"; ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $plfper."%"; ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $jhuper."%"; ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $upfaper."%"; ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $slmcper."%"; ?></p>
    </blockquote></td>
  </tr>
  <tr>
    <td><strong>SEATS</strong></td>
    <td><blockquote>
      <p><?php echo $seatsforunp ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $seatsforupfa ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $seatsforuplf ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $seatsforjhu ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $seatsforndf ?></p>
    </blockquote></td>
    <td><blockquote>
      <p><?php echo $seatsforslmc?></p>
    </blockquote></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
    <td><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
    <td><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
    <td><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
    <td><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
    <td><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#CCCCCC"><blockquote>
      <p><strong>Summery</strong></p>
    </blockquote></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFCC00">Valid Votes</td>
    <td align="center" bgcolor="#FFCC00"><?php echo $cunt ?></td>
    <td align="center" bgcolor="#FFCC00"><?php echo $percentage1."%"; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFCC00">Rejected Votes</td>
    <td align="center" bgcolor="#FFCC00"><?php echo $rcunt ?></td>
    <td align="center" bgcolor="#FFCC00"><?php echo $percentage2."%"; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFCC00">Total Polled </td>
    <td align="center" bgcolor="#FFCC00"><?php echo $ttl ?></td>
    <td align="center" bgcolor="#FFCC00"><?php echo $percentage3."%"; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFCC00">Regis.Electors</td>
    <td align="center" bgcolor="#FFCC00"><?php echo $ttlvotes ?></td>
    <td bgcolor="#FFCC00">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#990000">&nbsp;</td>
  </tr>
</table>
</body>
</html>