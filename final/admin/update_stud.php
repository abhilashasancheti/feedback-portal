<?php 
error_reporting(E_ERROR | E_PARSE);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';//password

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname) or die("database not available");

?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Password</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<table width="64%" align="center" border="0" cellpadding="0" cellspacing="1" >
<tr>
<td height="60" colspan="2" align="center"> 
<img src="logo-iitg.gif" alt="IITG LOGO"><p align="center" style="margin-top:-80px; margin-bottom:50px;"><b><font size="5">Admin Panel</font></b></p>
</td>
</tr><!--<?php //include('admin_panel_heading.php'); ?>-->
<tr>
<td width="22%" valign="top" bgcolor="#FFFFFF">
<?php include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top" bgcolor="#FFFFFF">

<?php
if(isset($_POST['submit']))
  {
	
    
	    $stud_id = $_POST['stud_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		  
		$result = mysql_query("UPDATE  studentinfo  SET password='$password'  WHERE username='$username'");
		$result = mysql_query("UPDATE  logininfo  SET password='$password'  WHERE username='$username'");
		
		echo "<b>Password is updated successfully!</b><br>You'll be redirected after (1) Seconds";
          echo "<meta http-equiv=Refresh content=1;url=studentinfo.php>";
		
	
  }//end of if($submit).


  // If the form has not been submitted, display it!
else
  {//begin of else
   $stud_id = $_GET['id'];
    $result = mysql_query("SELECT * FROM  studentinfo WHERE stud_id='$stud_id' ");
        while($myrow = mysql_fetch_assoc($result))
             {

      ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="update_pass" onsubmit="return chkForm();">
<div style="border: solid 1px navy; margin-right:10px;">
<input type="hidden" name="stud_id" value="<? echo $stud_id; ?>">
<table width="283" border="0" cellpadding="3" cellspacing="1">
<tr><td colspan="2" align="center" style="font-size:20px">Update Password</td></tr>
  <tr>
    <td width="92"><div align="left">Username</div></td>
    <td width="163"><label>
      <div align="left">
        <input type="text" name="username" value="<?php echo $myrow["username"]?>"/>
        </div>
    </label></td>
  </tr>
  <tr>
    <td width="92"><div align="left">Password</div></td>
    <td width="163"><label>
      <div align="left">
        <input type="password" name="password"/>
        </div>
    </label></td>
  </tr>
  
  <tr>
    <td><div align="left"></div></td>
    <td><div align="left">
      <table border="0" width="100%">
        <tr><td> <input type="submit" class="button3 black" name="submit" value="Update" onclick="return confirm('Are you sure you want to update?');"/></td><td align="right"><input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button3 black" /></td></tr>
      </table>
    </div></td>
  </tr>
</table>
</div>
</form>

    
 <?php
 	}//end of while loop
  }//end of else
?>
<p>&nbsp;</p></td>
</tr>
</table>
</body>
</html>
<script language="javascript" type="text/javascript">
}
function chkForm(form)
{

		var RefForm = document.update_pass;
		if (RefForm.password.value.length < 1 )
		{
			alert("Enter Passowrd");	
			RefForm.f_name.focus();		
			return false;
		}
		
}
</script>