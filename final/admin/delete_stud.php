<?php 
//include('session_chk.php');
	   $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';//password

	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

	$dbname = 'feedback';
	mysql_select_db($dbname) or die("database not available");


        $stud_id = $_GET['id'];
        //echo $stud_id;
		$query2 = mysql_query("SELECT *  FROM studentinfo where stud_id = '$stud_id'") or die(mysql_error());
		$row2 = mysql_fetch_array($query2) or die(mysql_error());
		$username=$row2['username'];
        $result = mysql_query("DELETE FROM studentinfo WHERE stud_id='$stud_id' ");
        $result = mysql_query("DELETE FROM logininfo WHERE username='$username' ");
		
		
		//mysql_query("DELETE FROM studentinfo WHERE stud_id='$stud_id' ");
      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Unregister Student</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<table width="57%" align="center" border="0" cellpadding="0" cellspacing="1">
<?php include('admin_panel_heading.php'); ?>
<tr>
<td width="22%" valign="top" >
<?php  include('left_side.php');?>
</td>

<td width="78%" align="center" valign="top">
<table width="100%" border="0" align="center" >
<tr><td></td></tr>
<tr><td colspan="3" align="center" style="font-size:20px"></td></tr>
<tr><td></td></tr>
</table>

<p> <?php echo "<b>Student Detail is deleted!</b><br>You'll be redirected after (1) Seconds";
          echo "<meta http-equiv=Refresh content=1;url=studentinfo.php>";?></p></td>
</tr>
</table>
</body>
</html>
