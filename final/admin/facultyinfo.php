<?php 
error_reporting(E_ERROR | E_PARSE);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';//password

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'feedback';
mysql_select_db($dbname) or die("database not available");

	 // include("includes/config_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Facultyinfo</title>
<link rel="shortcut icon" type="image/x-icon" href="logo-iitg.gif">
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body>
<table width="57%" align="center"  border="0" cellpadding="0" cellspacing="1" >
<tr>
<td height="60" colspan="2" align="center"> 
<img src="logo-iitg.gif" alt="IITG LOGO" style="margin-left:-850px"><p align="center" style="margin-top:-80px; margin-bottom:50px;"><b><font size="5">Admin Panel</font></b></p>
</td>
</tr><!--<?php //include('admin_panel_heading.php'); ?>-->
<tr>
<td width="17%" >
<?php include('left_side.php');?>
</td>

<td width="83%" align="center" valign="top" bgcolor="#FFFFFF">
<p>
<table width="500px" align="center"><tr><td colspan="3" align="right"></td>
<td colspan="3" > <input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button2 black" /></td></tr></table>
</p>
<table id="rounded-corner" border="0" align="center" cellpadding="0" cellspacing="0" >
<?php
		
		$group_by=mysql_query("SELECT distinct(f_id) FROM facultyinfo");
		 echo '<tr>';
				   echo "<td align=center>"."S.No"."</td>";
				   echo "<td align=center>"."Course_no"."</td>";
				   echo "<td align=center>"."Course_name"."</td>";
				   echo "<td align=center>"."Instructor"."</td>";
				   echo "<td align=center>"."Personal homepage"."</td>";
				   echo "<td align=center>"."Username"."</td>";
				   echo "<td align=center>"."Password"."</td>";
				   
				   echo "<td align=center>"."Update_Password"."</td>";
				  

				  
				  echo '</tr>';
			
		while($group_b_id = mysql_fetch_array($group_by))
		{
		
			
			$result = mysql_query("SELECT * FROM facultyinfo where f_id='".$group_b_id['f_id']."' ORDER BY f_id");
	//lets make a loop and get all news from the database
			$i=1;
			
			
			if(mysql_num_rows($result)>0)
			{
				 while($myrow = mysql_fetch_array($result))
				 {//begin of loop
					$id=$myrow['f_id'];				  
				   echo '<tr>';
				   echo "<td align=center>".$id."</td>";
				   echo "<td align=center>".$myrow['course_no']."</td>";
				   echo "<td align=center>".$myrow['course_name']."</td>";
				   echo "<td align=center>".$myrow['instructor']."</td>";
				   echo "<td align=center>".$myrow['per_homepage']."</td>";
				   echo "<td align=center>".$myrow['username']."</td>";
				   echo "<td align=center>".$myrow['password']."</td>";
				   echo "<td>"."<a href=update_fac.php?id=".$id.">Update</a>"."</td>";
				

				  
				  echo '</tr>';  
				  
				 }//end of loop
			}
			else
			{
				echo '<tr><td colspan=4 align=center>No record found!</td></tr>';
			}
		} 
		
?>
</table>
</td>
</tr>
</table>
<!--<input type="button" name="Back" value="Back"  onclick="javascript: history.go(-1)" class="button" /></td></tr>-->
      </table>
</body>
</html>
