<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
session_id();

//if(!isset($_COOKIE['uname'])){

//header ("Location: login.php");

//}else{
	
		
	

	if (isset($_POST['sub'])){
		
		include "connection.php";
		
//password gnarator......................................................................................................
		
		
// start with a blank password
  
function generatePassword ($length = 8)
{
 
  // start with a blank password
  $password = "";
  
	
 
 
  // define possible characters
  $possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
    
  // set up a counter
  $i = 0; 
    
  // add random characters to $password until $length is reached
  while ($i < $length) { 
 
    // pick a random character from the possible ones
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
        
    // we don't want this character if it's already in the password
    if (!strstr($password, $char)) { 
      $password .= $char;
      $i++;
    }
 
  }

 
  // done!
 return $password;
 
}
 
// First, get a list of all existing users
$query = "SELECT 'userName' FROM login";
$result = mysql_query($query) or die(mysql_error());
 
// Determine the total number of passwords needed.
$userCount = mysql_num_rows($result);
 
// Create an array to hold the passwords
$arrPasswords = array();
 
// Generate a unique password for each user
for ($i=0; $i<$userCount; $i++)
{
        $newPassword = generatePassword();
        
        // Ensure that the password does not exist in the passwords array
        while (in_array($newPassword, $arrPasswords))
        {
                $newPassword = generatePassword();
        }
        
        $arrPasswords[] = $newPassword;
}
 
		
		
		
		
		//END of pwd gen.........................................................................................................
		
		$nic=$_POST['nic'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$add_l1=$_POST['a_l1'];
		$add_l2=$_POST['a_l2'];
		$add_l3=$_POST['a_l3'];
		$age=$_POST['age'];
		$email=$_POST['email'];
		$province=$_POST['province'];
		$distric=$_POST['district'];
		$p_division=$_POST['p_division'];
		$p_station=$_POST['p_station'];
		$ip=$_POST['ip'];
		$pwd=generatePassword();
		
		
		$nic_s=$_SESSION['nic'];
		$fname_s=$_SESSION['fname'];
		$lname_s=$_SESSION['lname'];
		$add_l1_s=$_SESSION['a_l1'];
		$add_l2_s=$_SESSION['a_l2'];
		$add_l3_s=$_SESSION['a_l3'];
		$age_s=$_SESSION['age'];
		$mail_s=$_SESSION['email'];
		$province_s=$_SESSION['province'];
		$distric_s=$_SESSION['distric'];
		$p_division_s=$_SESSION['p_division'];
		$p_station_s=$_SESSION['p_station'];
		$ip_s=$_SESSION['ip'];

		
		
		
		if($nic==NULL || $fname==NULL || $lname==NULL || $add_l1==NULL || $add_l2==NULL || $add_l3==NULL || $age==NULL || $distric==NULL || $p_division==NULL || $province==NULL || $email==NULL || $p_station==NULL || $ip==NULL || $pwd==NULL){
			$msg1="You can't leave this fields are empty";
		}else if($nic_s=="true" || $fname_s=="true" || $lname_s=="true" || $add_l1_s=="true" || $add_l2_s=="true" || $add_l3_s=="true" || $age_s=="true" || $distric_s=="true" || $p_division_s=="true" || $province_s=="true" || $mail_s=="true" || $p_station_s=="true" || $ip_s=="true"){
			
	unset($_SESSION['nic']);
	unset($_SESSION['fname']);
	unset($_SESSION['lname']);
	unset($_SESSION['a_l1']);
	unset($_SESSION['a_l2']);
	unset($_SESSION['a_l3']);
	unset($_SESSION['age']);
	unset($_SESSION['email']);
	unset($_SESSION['province']);
	unset($_SESSION['district']);
	unset($_SESSION['p_division']);
	unset($_SESSION['p_station']);
	unset($_SESSION['ip']);
			
	$insert=mysql_query("INSERT INTO e_officers_details VALUES('$nic','$fname','$lname','$add_l1','$add_l2','$add_l3','$age','$email','$province','$distric','$p_division','$p_station','Not_Ok')");

			if(mysql_affected_rows()>0)
				{	
				$insert2=mysql_query("INSERT INTO login VALUES('','$nic','$pwd','$ip')");
					if(mysql_affected_rows()>0){
						$msg1="successfuly added";
					}else{
						$msg1="login table Error";
					}
				
				}else{
			
				$msg1="Error table";
				}
			

		
		}else{
		
		$msg1="Error";
	
			}
			
				
}
//}
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


//F_name Validater-------------------------------------------------------------------------------------------------------------------


function fnameValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("fname").innerHTML="";
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
    document.getElementById("fname").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/fnamevalidater.php?q="+str,true);
xmlhttp.send();
}


//L Name validater----------------------------------------------------------------------------------------------------------------

function lnameValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("lname").innerHTML="";
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
    document.getElementById("lname").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/lnamevalidater.php?q="+str,true);
xmlhttp.send();
}


//address line 1 validater---------------------------------------------------------------------------------------------


function a_l1Validate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("a_l1").innerHTML="";
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
    document.getElementById("a_l1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/a_l1validater.php?q="+str,true);
xmlhttp.send();
}



//address line 2 validater---------------------------------------------------------------------------------------------


function a_l2Validate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("a_l2").innerHTML="";
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
    document.getElementById("a_l2").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/a_l2validater.php?q="+str,true);
xmlhttp.send();
}


//address line 3 validater---------------------------------------------------------------------------------------------


function a_l3Validate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("a_l3").innerHTML="";
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
    document.getElementById("a_l3").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/a_l3validater.php?q="+str,true);
xmlhttp.send();
}



//Age validater ---------------------------------------------------------------------------------------------------------------------



function ageValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("age").innerHTML="";
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
    document.getElementById("age").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/agevalidater.php?q="+str,true);
xmlhttp.send();
}

//province validator ---------------------------------------------------------------------------------------------------------------

function emailValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("email").innerHTML="";
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
    document.getElementById("email").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/email_validator.php?q="+str,true);
xmlhttp.send();
}




//province validator ---------------------------------------------------------------------------------------------------------------



function provinceValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("province").innerHTML="";
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
    document.getElementById("province").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/province_validator.php?q="+str,true);
xmlhttp.send();
}





//distric validator ------------------------------------------------------------------------------------------------------------------



function districtValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("district").innerHTML="";
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
    document.getElementById("district").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/district_validator.php?q="+str,true);
xmlhttp.send();
}



//p_division validator ---------------------------------------------------------------------------------------------------------------



function pdivisionValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("p_division").innerHTML="";
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
    document.getElementById("p_division").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/p_divi_validator.php?q="+str,true);
xmlhttp.send();
}


//p_station validator ---------------------------------------------------------------------------------------------------------------



function pstationValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("p_station").innerHTML="";
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
    document.getElementById("p_station").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/p_station_validator.php?q="+str,true);
xmlhttp.send();
}


//ip address validator ---------------------------------------------------------------------------------------------------------------



function ipValidate(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("ip").innerHTML="";
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
    document.getElementById("ip").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Validaters/ipvalidator.php?q="+str,true);
xmlhttp.send();
}



</script>

<script type="text/javascript" src="js/list_menu.js">
</script>

<script type="text/javascript" src="js/polling_dev.js">
</script>

<script type="text/javascript" src="js/polling_station.js">
</script>




<style type="text/css">

tr:hover {background-color:#FC6}

</style>

<title>election officer Registration</title>
</head>

<body>
<table width="550" border="0" align="center">
  <tr>
    <td colspan="4" align="center" bgcolor="#FC6"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#990000">&nbsp;</td>
  </tr>
  <form action="#" name="f1" id="f1" method="post" >
  <tr>
    <td colspan="4" bgcolor="#FFFFFF"><h3><strong>Election Officer Registration</strong></h3></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td width="211" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="94" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="97" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="130" bgcolor="#FFFFFF">NIC</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="nic" type="text" id="textfield2" onKeyUp="nicValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="10">
</label>
                          <span class="style16" id="nic"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">First Name</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="fname" type="text" id="textfield2" onKeyUp="fnameValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
  <span class="style16" id="fname"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">Last Name</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="lname" type="text" id="textfield2" onKeyUp="lnameValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
  <span class="style16" id="lname"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#CCCCCC">Address</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center"> Line 1</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="a_l1" type="text" id="textfield2" onKeyUp="a_l1Validate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
  <span class="style16" id="a_l1"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center">Line 2</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="a_l2" type="text" id="textfield2" onKeyUp="a_l2Validate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
  <span class="style16" id="a_l2"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF" align="center">Line 3</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="a_l3" type="text" id="textfield2" onKeyUp="a_l3Validate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
  <span class="style16" id="a_l3"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">Age</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
                          <input name="age" type="text" id="textfield2" onKeyUp="ageValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
  <span class="style16" id="age"></span></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">E-mail</td>
    <td colspan="2" bgcolor="#FFFFFF"><label><input name="email" type="text" id="textfield" onKeyUp="emailValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"></label>
    <span class="style16" id="email"></span>
    </td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">Province</td>
    <td colspan="2" bgcolor="#FFFFFF"><label><select name="province" id="provinceabc" size=1 onChange="changeList(this),gif2Validate(this.value)" onBlur="provinceValidate(this.value),disableAdd(this.form,this.value)">
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
</select><span id="province"></span></label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">Distric</td>
    <td colspan="2" bgcolor="#FFFFFF"><label><select name="district" id="districtabc" size=1 onChange="changeList2(this),gif3Validate(this.value)" onBlur="districtValidate(this.value),disableAdd(this.form,this.value)">
   <option>Select your District..
        
      </select><span id="district"></span></label></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">Polling Division</td>
    <td colspan="2" bgcolor="#FFFFFF"><label>
      <select name="p_division" id="p_divisionabc" size=1 onChange="changeList3(this),gif3Validate(this.value)"  onBlur="pdivisionValidate(this.value)">
        <option>Select your polling Division..
    
        </select><span id="p_division"></span></label>      
      </td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">Polling Station</td>
    <td colspan="2" bgcolor="#FFFFFF"><select name="p_station" id="p_stationabc" size=1 onChange="gif3Validate(this.value)"  onBlur="pstationValidate(this.value)">
      <option>Select your polling Division..
        
      </select><span id="p_station"></span></label></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">IP address of PC</td>
    <td colspan="2" bgcolor="#FFFFFF"><input name="ip" type="text" id="textfield3" onKeyUp="ipValidate(this.value),disableAdd(this.form,this.value)" size="24" maxlength="100"><span id="ip"></span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" bgcolor="#FFFFFF"><font color="#990000"><?php echo $msg1; ?></font></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><input type="submit" name="sub" id="button" value="Submit" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#990000">&nbsp;</td>
    </tr>

  </form>
</table>
<p>&nbsp;</p>
</body>
</html>