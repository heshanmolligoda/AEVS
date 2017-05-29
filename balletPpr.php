<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
session_id();

if(!isset($_SESSION['nic_no'])){

header ("Location: checking_form.php");

}else{

if(isset($_POST['sub'])){
	
	include "connection.php";
	
	
	
	/*$query_ud=mysql_query("SELECT* FROM voters_details WHERE nic=$nic");
	while($row=mysql_fetch_assoc($query_ud)){
		
	$_SESSION['dis']=$row['distric'];
	$_SESSION['p_dev']=$row['p_division'];

		
	}*/
	
	$nic=$_SESSION['nic_no'];
	$distric=$_SESSION['district'];
	$p_div=$_SESSION['p_div'];
	$province=$_SESSION['province'];
	
	
	
	
	if($_POST['party']=="United National Party" || isset($_POST['vote'])){
		
		$vote_prty=$_POST['party'];
		$vote_cand=$_POST['vote']; 
		
	}else if($_POST['party']=="United Peoples Freedom Alliance" || isset($_POST['vote'])){
		
		$vote_prty=$_POST['party'];
		$vote_cand=$_POST['vote'];
		
	}else if($_POST['party']=="Peoples Liberation Front" || isset($_POST['vote'])){
		
		$vote_prty=$_POST['party'];
		$vote_cand=$_POST['vote'];
		
	}else if($_POST['party']=="Jathika Hela Urumaya" || isset($_POST['vote'])){
		
		$vote_prty=$_POST['party'];
		$vote_cand=$_POST['vote'];
		
	}else if($_POST['party']=="New Democratic Front" || isset($_POST['vote'])){
		
		$vote_prty=$_POST['party'];
		$vote_cand=$_POST['vote'];
		
	}else if($_POST['party']=="Sri Lanka Muslim Congress" || isset($_POST['vote'])){
		
		$vote_prty=$_POST['party'];
		$vote_cand=$_POST['vote'];
		
		
	}else{
		
	$msg="error";
	}

	
	
if(count($_POST['vote'])<=3){
	
	if(isset($vote_prty) && isset($vote_cand)){
		
		$query2=mysql_query("INSERT INTO vote VALUES ('','$vote_prty','$province','$distric','$p_div','1','0')");
		if(mysql_affected_rows()>0){
			
		foreach($vote_cand as $vte){
		
		$query2=mysql_query("INSERT INTO candidate_vote VALUES ('','$vote_prty','$vte','$province','$distric','$p_div','1','0')");
			
		}
		
		header ("Location: voters_access.php");	
		}

	}else if(isset($vote_prty) && $vote_cand==NULL){
	
		$query2=mysql_query("INSERT INTO vote VALUES ('','$vote_prty','$province','$distric','$p_div','1','0')");
		if(mysql_affected_rows()>0){
		header ("Location: voters_access.php");
		}
		
	}else if($vote_prty==NULL && isset($vote_cand)){
		
	$msg="Please select the election party";	
	
	}else{
		
	$msg="Please select the election party";	
		
	}


}else{

$msg="You can only select three choises..!";
	
}



}

}

if(isset($_POST['reject'])){

include "connection.php";

	$nic=$_SESSION['nic_no'];
	$distric=$_SESSION['district'];
	$p_div=$_SESSION['p_div'];
	$province=$_SESSION['province'];
	

$rejctq=mysql_query("INSERT INTO vote VALUES ('','rejected','$province','$distric','$p_div','0','1')");

if(mysql_affected_rows()>0){
	
	header ("Location: voters_access.php");
	
}


}

?>



<html>
<head>



<script type="text/javascript">

function theChecker()
{
	
//var a=document.getElementById(checkbox);
//if(a==1)	
if(document.voteform.asd.checked==false)
{
document.voteform.vote.disabled=true;
}
else
{
document.voteform.vote.disabled=false;
}
}

</script>


<style type="text/css">

tr:hover {background-color:#FC6}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>BalletPaper</title>
</head>

<body>
<table width="500" border="0" align="center" bordercolor="#CCCCCC">
  <tr>
    <td colspan="5" align="center" bgcolor="#FFCC66"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#990000">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <form id="form1" name="voteform" method="post" action="">
  <tr>
    <td width="100" bgcolor="#CCCCCC"><blockquote>
      <p>1.</p>
    </blockquote></td>
    <td width="89" bgcolor="#CCCCCC"><img src="images/logo/url.jpg" width="68" height="60" /></td>
    <td colspan="2" bgcolor="#CCCCCC">United National Party</td>
    
    <td width="108" bgcolor="#CCCCCC">
      <blockquote>
        <p>
          <input type="radio" name="party" id="radio" value="United National Party" />
          </p>
        </blockquote>
      <label for="radio"></label>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>2.</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><img src="images/logo/url1.jpg" width="64" height="52" /></td>
    <td colspan="2" bgcolor="#CCCCCC">United People's Freedom<br />
Alliance</td>
    <td bgcolor="#CCCCCC">
      <blockquote>
        <p>
          <input type="radio" name="party" id="radio2" value="United Peoples Freedom Alliance" />
          </p>
        </blockquote>
      <label for="radio2"></label>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>3.</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><img src="images/logo/url2.jpg" width="64" height="52" /></td>
    <td colspan="2" bgcolor="#CCCCCC">People's Liberation Front</td>
    <td bgcolor="#CCCCCC">
      <blockquote>
        <p>
          <input type="radio" name="party" id="radio3" value="Peoples Liberation Front" />
          </p>
        </blockquote>
      <label for="radio3"></label>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>4.</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><img src="images/logo/Jhu_logo.jpg" width="70" height="57" /></td>
    <td colspan="2" bgcolor="#CCCCCC">Jathika Hela Urumaya</td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>
        <input type="radio" name="party" id="radio4" value="Jathika Hela Urumaya" />
        </p>
      </blockquote>
      <label for="radio4"></label></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>5.</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><img src="images/logo/NDF.jpg" width="63" height="57" /></td>
    <td colspan="2" bgcolor="#CCCCCC">New Democratic Front</td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>
        <input type="radio" name="party" id="radio5" value="New Democratic Front" />
        </p>
      </blockquote>
      <label for="radio5"></label></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>6.</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><img src="images/logo/71176_23324539529_2327541_n.jpg" width="65" height="76" /></td>
    <td colspan="2" bgcolor="#CCCCCC">Sri Lanka Muslim Congress</td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>
        <input type="radio" name="party" id="radio6" value="Sri Lanka Muslim Congress" />
        </p>
      </blockquote>
      <label for="radio6"></label></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#990000">&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p><strong>1</strong></p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="asd" id="checkbox" value="1" onClick="theChecker()" />
      <label for="checkbox"></label>
      <input type="checkbox" name="vote[]" id="checkbox2" value="1" onClick="theChecker()"/>
      <label for="checkbox2"></label>
      <input type="checkbox" name="vote[]" id="checkbox3" value="1" onClick="theChecker()"/>
      <label for="checkbox3"></label></td>
    <td width="105" bgcolor="#CCCCCC"><blockquote>
      <p>11</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox31" value="11" onClick="theChecker()" />
      <label for="checkbox31"></label>
      <input type="checkbox" name="vote[]" id="checkbox32" value="11" onClick="theChecker()" />
      <label for="checkbox32"></label>
      <input type="checkbox" name="vote[]" id="checkbox33" value="11" onClick="theChecker()" />      <label for="checkbox33"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p> 2</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox4"  value="2" onClick="theChecker()" />
      <label for="checkbox4"></label>
      <input type="checkbox" name="vote[]" id="checkbox5"value="2" onClick="theChecker()" />
      <label for="checkbox5"></label>
      <input type="checkbox" name="vote[]" id="checkbox6"value="2" onClick="theChecker()" />
      <label for="checkbox6"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>12</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox34" value="12" onClick="theChecker()" />
      <label for="checkbox34"></label>
      <input type="checkbox" name="vote[]" id="checkbox35"  value="12" onClick="theChecker()" />
      <label for="checkbox35"></label>
      <input type="checkbox" name="vote[]" id="checkbox36" value="12" onClick="theChecker()" />
      <label for="checkbox36"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>3 </p>
    </blockquote>
      <label for="checkbox12"></label></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox7"  value="3"/>
      <label for="checkbox7"></label>
      <input type="checkbox" name="vote[]" id="checkbox8"value="3" />
      <label for="checkbox8"></label>
      <input type="checkbox" name="vote[]" id="checkbox9"value="3" />
      <label for="checkbox9"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>13</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox37" value="13" />
      <label for="checkbox37"></label>
      <input type="checkbox" name="vote[]" id="checkbox38"  value="13"/>
      <label for="checkbox38"></label>
      <input type="checkbox" name="vote[]" id="checkbox39" value="13" />
      <label for="checkbox39"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>4</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox10" value="4" />
      <label for="checkbox10"></label>
      <input type="checkbox" name="vote[]" id="checkbox11" value="4" />
      <label for="checkbox11"></label>
      <input type="checkbox" name="vote[]" id="checkbox12" value="4" />
      <label for="checkbox12"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>14</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox40" value="14" />
      <label for="checkbox40"></label>
      <input type="checkbox" name="vote[]" id="checkbox41" value="14" />
      <label for="checkbox41"></label>
      <input type="checkbox" name="vote[]" id="checkbox42" value="14" />
      <label for="checkbox42"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>5</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox13" value="5" />
      <label for="checkbox13"></label>
      <input type="checkbox" name="vote[]" id="checkbox14" value="5" />
      <label for="checkbox14"></label>
      <input type="checkbox" name="vote[]" id="checkbox15" value="5" />
      <label for="checkbox15"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>15</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox43" value="15" />
      <label for="checkbox43"></label>
      <input type="checkbox" name="vote[]" id="checkbox44" value="15" />
      <label for="checkbox44"></label>
      <input type="checkbox" name="vote[]" id="checkbox45" value="15" />
      <label for="checkbox45"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>6</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox16" value="6" />
      <label for="checkbox16"></label>
      <input type="checkbox" name="vote[]" id="checkbox17" value="6" />
      <label for="checkbox17"></label>
      <input type="checkbox" name="vote[]" id="checkbox18"  value="6"/>
      <label for="checkbox18"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>16</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox46"  value="16"/>
      <label for="checkbox46"></label>
      <input type="checkbox" name="vote[]" id="checkbox47" value="16" />
      <label for="checkbox47"></label>
      <input type="checkbox" name="vote[]" id="checkbox48" value="16" />
      <label for="checkbox48"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>7</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox19" value="7" />
      <label for="checkbox19"></label>
      <input type="checkbox" name="vote[]" id="checkbox20" value="7" />
      <label for="checkbox20"></label>
      <input type="checkbox" name="vote[]" id="checkbox21" value="7" />
      <label for="checkbox21"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>17</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox49" value="17" />
      <label for="checkbox49"></label>
      <input type="checkbox" name="vote[]" id="checkbox50" value="17" />
      <label for="checkbox50"></label>
      <input type="checkbox" name="vote[]" id="checkbox51" value="17" />
      <label for="checkbox51"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>8</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox22" value="8" />
      <label for="checkbox22"></label>
      <input type="checkbox" name="vote[]" id="checkbox23" value="8" />
      <label for="checkbox23"></label>
      <input type="checkbox" name="vote[]" id="checkbox24" value="8" />
      <label for="checkbox24"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>18</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox52" value="18" />
      <label for="checkbox52"></label>
      <input type="checkbox" name="vote[]" id="checkbox53" value="18" />
      <label for="checkbox53"></label>
      <input type="checkbox" name="vote[]" id="checkbox54" value="18" />
      <label for="checkbox54"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>9</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox25" value="9" />
      <label for="checkbox25"></label>
      <input type="checkbox" name="vote[]" id="checkbox26" value="9" />
      <label for="checkbox26"></label>
      <input type="checkbox" name="vote[]" id="checkbox27" value="9" />
      <label for="checkbox27"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>19</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox55" value="19" />
      <label for="checkbox55"></label>
      <input type="checkbox" name="vote[]" id="checkbox56" value="19" />
      <label for="checkbox56"></label>
      <input type="checkbox" name="vote[]" id="checkbox57" value="19" />
      <label for="checkbox57"></label></td>
    </tr>
  <tr>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>10</p>
    </blockquote></td>
    <td bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox28" value="10" />
      <label for="checkbox28"></label>
      <input type="checkbox" name="vote[]" id="checkbox29" value="10" />
      <label for="checkbox29"></label>
      <input type="checkbox" name="vote[]" id="checkbox30" value="10" />
      <label for="checkbox30"></label></td>
    <td bgcolor="#CCCCCC"><blockquote>
      <p>20</p>
    </blockquote></td>
    <td colspan="2" bgcolor="#CCCCCC"><input type="checkbox" name="vote[]" id="checkbox58" value="20" />
      <label for="checkbox58"></label>
      <input type="checkbox" name="vote[]" id="checkbox59" value="20"  />
      <label for="checkbox59"></label>
      <input type="checkbox" name="vote[]" id="checkbox60" value="20"  />
      <label for="checkbox60"></label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><input type="submit" name="sub" id="button2" value="Vote" />      <input type="submit" name="reject" id="button" value="Reject">
	
	
<font color="#990000"><?php echo $msg ?></font></td>
    </tr>
  <tr>
    <td height="22" colspan="5" bgcolor="#990000"><blockquote>
      <p>&nbsp;</p>
    </blockquote></td>
    </tr>
  </form>
</table>vc
</body>
</html>