<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="654" height="355" border="0" align="center">
  <tr>
    <td colspan="6" align="center" bgcolor="#FFCC66"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#990000"><font color="#FFFFFF"><em>ELECTION RESULTS </em></font></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="91" align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" align="center" bgcolor="#FFFFFF">Province</td>
    <td colspan="2" bgcolor="#FFFFFF"><select name="province" id="provinceabc" size="1" onchange="gif2Validate(this.value),changeList(this)" onblur="provinceValidate(this.value),disableAdd(this.form,this.value)">
      <option>Select your Province.. </option>
      <option value="Central">Central </option>
      <option value="Eastern">Eastern </option>
      <option value="North Central">North Central </option>
      <option value="North Western">North Western </option>
      <option value="Northern">Northern </option>
      <option value="Sabaragamuwa">Sabaragamuwa </option>
      <option value="Southern">Southern </option>
      <option value="Uva">Uva </option>
      <option value="Western">Western </option>
    </select></td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" align="center" bgcolor="#FFFFFF">Destrict</td>
    <td colspan="2" bgcolor="#FFFFFF"><select name="district" id="districtabc" size="1" onchange="gif3Validate(this.value)" onblur="districtValidate(this.value),disableAdd(this.form,this.value)">
      <option>Kandy</option>
    </select></td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" align="center" bgcolor="#FFFFFF">Polling Division</td>
    <td colspan="2" bgcolor="#FFFFFF"><select name="p_division" id="select2">
      <option>Yatinuwara</option>
      <?php
		
	include "connection.php";
		
	$query_p_division=mysql_query("SELECT polling_Division FROM pollin_div");
	while ($row = mysql_fetch_array($query_p_division)) 
	{

		for($i = 0; $i <count($query_p_division); $i++) 
		{
		print("<option value=\"".$row['polling_Division']."\">".$row['polling_Division']."</option>");
 		}

	}
						
		?>
    </select></td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#0AB415">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#0AB415">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#0AB415">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#FEA50B">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#0AB415">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#961519">&nbsp;</td>
    <td align="center" bgcolor="#FEA50B">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#0AB415">&nbsp;</td>
    <td align="center" bgcolor="#01009A">&nbsp;</td>
    <td align="center" bgcolor="#961519">&nbsp;</td>
    <td align="center" bgcolor="#FEA50B">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="93"><blockquote>
      <h3>&nbsp;</h3>
    </blockquote></td>
    <td width="113" align="center"><img src="images/logo/url.jpg" width="68" height="60" /></td>
    <td width="113" align="center"><img src="images/logo/url1.jpg" width="68" height="60" /></td>
    <td width="105" align="center"><img src="images/logo/url2.jpg" width="68" height="60" /></td>
    <td width="113" align="center"><img src="images/logo/Jhu_logo.jpg" width="68" height="60" /></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><blockquote>
      <p>41%</p>
    </blockquote></td>
    <td><blockquote>
      <p>47%</p>
    </blockquote></td>
    <td><blockquote>
      <p>7%</p>
    </blockquote></td>
    <td><blockquote>
      <p>10%</p>
    </blockquote></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#990000">&nbsp;</td>
  </tr>
</table>
</body>
</html>