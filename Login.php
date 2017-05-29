<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
session_id();

$errmsg="";

$user=$_POST['username'];
$pwd=$_POST['password'];

if(isset($_POST['sub'])){
	
	include "connection.php";

if($_POST['username']==NULL || $_POST['password']==NULL){

$errmsg="<img src=\"images/msg/warning.png\" width=\"32\" height=\"32\" /> Enter username and password";
//header("Location: login.php");
}else if($_POST['username']=="admin" && $_POST['password']=="abc123"){
	
	$_SESSION['user']=$_POST['username'];
	header("Location: cpanel.php");
	
}else{
	
	$query1=mysql_query("SELECT * FROM login WHERE userName='$user' AND aCode='$pwd'");
	
	if(mysql_num_rows($query1)>0){
	
	$_SESSION['user']=$_POST['username'];
	header("Location: checking_form.php");
	}else{
		
		$errmsg="Username or password is incorrect...!";
		
	}
}
}




?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.btn:hover { background-color:#3CF}

</style>
</head>

<body>
<table width="200" border="0" align="center">
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
    <td colspan="3" bgcolor="#FFFFFF"><img src="images/banner1.png" width="400" height="100" /></td>
  </tr>
  <tr>
    <td width="66">&nbsp;</td>
    <td colspan="2"><font color="#990000"><?php echo $errmsg; ?></font></td>
  </tr>
  <form name="LoginForm" action="" method="post">
  <tr>
    <td>&nbsp;</td>
    
    <td width="99">Username</td>
    <td width="227"><span id="sprytextfield1">
      <label for="text1"></label>
      <input name="username" type="text" id="text1" maxlength="12" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Access Code</td>
    <td><span id="sprypassword1">
      <label for="password1"></label>
      <input name="password" type="password" id="password1" maxlength="12" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input class="btn" type="submit" name="sub" id="button" value="Submit" />
    
    
  </td>
  </tr>
  </form>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>